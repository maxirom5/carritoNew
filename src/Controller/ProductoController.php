<?php
namespace App\Controller;

use App\Negocio\Almacen;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductoController extends AbstractController{
    /**
     * @Route("/", name="listar_productos")
     */
    public function listarProductos(Almacen $almacen): Response{
        $productos = $almacen->findAll();
        return $this->render('producto/lista.html.twig', compact('productos'));
    }

    /**
     * @Route("/producto/{id}", name="detalle_producto")
     */
    public function detalleProducto(int $id, Almacen $almacen): Response{
        $idProducto = $id - 1;
        $producto = $almacen->findId($idProducto);
        return $this->render('producto/detalle.html.twig', compact('producto'));
    }
} 

?>