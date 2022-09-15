<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class CarritoController extends AbstractController{
    /**
     * @Route("/carrito/agregar", name="agregar_producto" method="$_POST")
     */
    public function agregarProducto(Request $request): RedirectResponse{
        $cantidad = $request->request->get('cantidad');
        $idProducto = $request->request->get('idproducto');
        $this->addFlash(
            'notice',
            "Se ingreso al carrito $cantidad unidades del producto $idProducto"
        );
        return $this->redirectToRoute('listar_productos');
    }
}
