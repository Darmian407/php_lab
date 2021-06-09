<?php

namespace App\Models;

use CodeIgniter\Model;

class ResourceModel extends Model
{
    // Specifies the database table that this model primarily works with.
    protected $table = 'resources';

    // This is the name of the column that uniquely identifies the records in this table.
    protected $primaryKey = 'id';

    // This setting allows you to define the type of data that is returned.
    protected $returnType = 'array';

    protected $allowedFields = ['type', 'downloadable', 'image', 'name', 'description', 'author'];

    public function buscar_recursos($keywords)
    {
        $result = $this->db->query('SELECT t.name AS type, r.name, u.name AS author, r.image, r.description, r.id FROM resources r JOIN users u ON r.author=u.id JOIN types t ON r.type=t.id WHERE (r.name LIKE "%' . $keywords . '%" OR u.name LIKE "%' . $keywords . '%")');
        return $result->getResultArray();
    }

    public function getTypes()
    {
        $result = $this->db->query('SELECT * FROM types ORDER BY id');
        return $result->getResultArray();
    }

    public function getCategories()
    {
        $result = $this->db->query('SELECT * FROM categories ORDER BY id');
        return $result->getResultArray();
    }

    public function insertarPadres($recursoId, $categoryId)
    {
        $validate = $this->db->query('SELECT * FROM resource_categories WHERE resource_id = "' . $recursoId . '" AND category_id = "' . $categoryId . '"')->getResultArray();
        $category = $this->db->query('SELECT * FROM categories WHERE id = "' . $categoryId . '"')->getResultArray();

        if (!$validate && $category) {
            $this->db->query('INSERT INTO resource_categories (resource_id,category_id) VALUES ("' . $recursoId . '","' . $categoryId . '")');
            if($category[0]['father']){
                $categoryFather = $this->db->query('SELECT * FROM categories WHERE name = "' . $category[0]['father'] . '"')->getResultArray();
                $this->insertarPadres($recursoId, $categoryFather[0]['id']);
            }
        }
    }

    public function insertResource($tipo, $descargable, $imagen, $nombre, $descripcion, $autor, $categories, $fileName, $subscription)
    {
        $this->db->query('INSERT INTO resources (name, description, type, downloadable, image, author, filename, subscription) VALUES ("' . $nombre . '","' . $descripcion . '","' . $tipo . '","' . $descargable . '","' . $imagen . '","' . $autor . '","' . $fileName . '","' . $subscription . '")');

        $query = $this->db->query('SELECT MAX(id) AS id FROM resources');
        $newId = $query->getResultArray();

        foreach ($categories as $categoryId) {
            $this->insertarPadres($newId[0]['id'], $categoryId);
        }
    }

    public function buscar_tipos($nameType)
    {
        $result = $this->db->query('SELECT t.name AS type, r.name, u.name AS author, r.image, r.description, r.id FROM resources r JOIN users u ON r.author=u.id JOIN types t ON r.type=t.id WHERE t.name = ("' . $nameType . '") ');
        return $result->getResultArray();
    }

    public function buscar_id($idResurce)
    {
        $query = $this->db->query('SELECT r.id, u.id AS authorId, r.downloadable, t.name AS type, r.name, u.name AS author, r.image AS image, r.description, r.filename, r.subscription AS rSub FROM resources r JOIN users u ON r.author=u.id JOIN types t ON r.type=t.id WHERE r.id = ("' . $idResurce . '") ');

        if ($query) {
            $result = $query->getFirstRow('array');
            return $result;
        }

        return [];
    }

    public function buscar_todo()
    {
        $result = $this->db->query('SELECT r.id, r.downloadable, t.name AS type, r.name, u.name AS author, r.image AS image, r.description, r.filename FROM resources r JOIN users u ON r.author=u.id JOIN types t ON r.type=t.id ');

        return $result->getResultArray();
 
    }

    public function buscar_recursos_autor($idAutor)
    {
        $result = $this->db->query('SELECT r.image AS image, r.description, r.filename, r.id, r.downloadable, r.name, t.name AS type, u.name AS author, u.id AS authorId FROM resources r JOIN users u ON r.author=u.id JOIN types t ON r.type=t.id WHERE u.id = ("' . $idAutor . '")');

        return $result->getResultArray();
 
    }

    public function buscar_autor($idAutor)
    {
        $query = $this->db->query('SELECT u.name AS author, u.birthdate, u.nick, u.id AS authorId, u.lastname AS lastname, u.image AS authorImg, a.biography AS biography FROM users u JOIN authors a ON a.user_id=u.id WHERE u.id = ("' . $idAutor . '")');

        if ($query) {
            $result = $query->getFirstRow('array');
            return $result;
        }

        return [];
 
    }

    public function getFavourites()
    {
        $session = \Config\Services::session();

        $user = $session->get('user');

        $result = $this->db->query('SELECT r.image AS image, r.description, r.filename, r.id AS resourceId, r.downloadable, r.name, t.name AS type, u.name AS author, u.id AS authorId FROM resources r JOIN users u ON r.author=u.id JOIN types t ON r.type=t.id JOIN favourites f ON r.id=f.resource_id WHERE user_id = ("' . $user['id'] . '")');

        return $result->getResultArray();
    }

    public function buscar_recursos_categoria($idCategory)
    {
        $result = $this->db->query('SELECT r.image AS image, r.description, r.filename, r.id, r.downloadable, r.name, t.name AS type, u.name AS author, u.id AS authorId, c.name AS category FROM resources r JOIN users u ON r.author=u.id JOIN types t ON r.type=t.id JOIN resource_categories rc ON rc.resource_id=r.id JOIN categories c ON rc.category_id=c.id WHERE category_id = ("' . $idCategory . '")');

        return $result->getResultArray();
    }
}
