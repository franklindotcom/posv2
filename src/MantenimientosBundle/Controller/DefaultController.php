<?php

namespace MantenimientosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MantenimientosBundle:Default:index.html.twig');
    }
    
    
      public function MantenimientosAction()
    {
        return $this->render('MantenimientosBundle:Default:mantenimientos.html.twig');
    }
    
    
     public function ListaCategoriasAction()
    {
        return $this->render('MantenimientosBundle:Default:listacategorias.html.twig');
    }
    public function AddCategoriaAction()
    {
        return $this->render('MantenimientosBundle:Default:AddCategoria.html.twig');
    }
    
    
     public function ListaAgenciasAction()
    {
        return $this->render('MantenimientosBundle:Default:listaagencias.html.twig');
    }
    public function AddAgenciaAction()
    {
        return $this->render('MantenimientosBundle:Default:addagencia.html.twig');
    }
    
    public function ListaVendedoresAction()
    {
        return $this->render('MantenimientosBundle:Default:listavendedores.html.twig');
    }
    public function AddVendedorAction()
    {
        return $this->render('MantenimientosBundle:Default:addvendedor.html.twig');
    }
    
    public function ListaProveedoresAction()
    {
        return $this->render('MantenimientosBundle:Default:listaproveedores.html.twig');
    }
    public function AddProveedorAction()
    {
        return $this->render('MantenimientosBundle:Default:addproveedor.html.twig');
    }
    
}
