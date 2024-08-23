<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\User;
use App\Models\Producto;
use App\Models\Categoria;

class ChartController extends Controller
{
    public function index()
    {
        // Datos para el gráfico de pedidos por mes
        $pedidosPorMes = Pedido::selectRaw('MONTH(fecha) as mes, COUNT(*) as cantidad')
            ->groupBy('mes')
            ->orderBy('mes')
            ->get();

        $meses = $pedidosPorMes->pluck('mes')->map(function($mes) {
            return \DateTime::createFromFormat('!m', $mes)->format('F');
        });
        $cantidadPedidos = $pedidosPorMes->pluck('cantidad');

        // Datos para el gráfico de usuarios por rol
        $usuariosPorRol = User::select('roles.nombre as rol', \DB::raw('COUNT(users.id) as cantidad'))
            ->join('roles', 'users.id_rol', '=', 'roles.id')
            ->groupBy('roles.nombre')
            ->get();

        $roles = $usuariosPorRol->pluck('rol');
        $cantidadUsuarios = $usuariosPorRol->pluck('cantidad');

        // Datos para el gráfico de productos por categoría
        $productosPorCategoria = Producto::select('categorias.nombre as categoria', \DB::raw('COUNT(productos.id) as cantidad'))
            ->join('categorias', 'productos.id_categoria', '=', 'categorias.id')
            ->groupBy('categorias.nombre')
            ->get();

        $categorias = $productosPorCategoria->pluck('categoria');
        $cantidadProductos = $productosPorCategoria->pluck('cantidad');

        return view('menu', [
            'meses' => $meses,
            'cantidadPedidos' => $cantidadPedidos,
            'roles' => $roles,
            'cantidadUsuarios' => $cantidadUsuarios,
            'categorias' => $categorias,
            'cantidadProductos' => $cantidadProductos,
        ]);
    }
}
