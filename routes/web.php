<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ChartController;


use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/menu', [ChartController::class, 'index'])->middleware('auth')->name('home');
//RUTA DE INICIO
Route::get('/', function () {
    return view('index');
})->name('inicio');


Route::get('/login', [SessionsController::class, 'create'])->name('login');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])->name('login.destroy')->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');




//USUARIO
Route::get('/usuario', [RegisterController::class, 'index'])->name('usuario')->middleware('auth');
//Ruta para eliminar
Route::delete('/usuario/{id}',[RegisterController::class, 'destroy'])->name('usuario.destroy')->middleware('auth');
//Ruta para mostrar
Route::get('/usuario/{id}/ver',[UsuarioController::class, 'show'])->name('usuario.show');
//Ruta para crear
Route::get('/usuario/crear', [UsuarioController::class, 'create'])->name('usuario.create')->middleware('auth');
//Ruta para guardar 
Route::post('/usuario', [UsuarioController::class, 'store'])->name('usuario.store')->middleware('auth');
//Ruta para editar
Route::get('/usuario/{id}/editar',[UsuarioController::class, 'edit'])->name('usuario.edit')->middleware('auth');
//Ruta para actualizar
Route::put('/usuario/{id}',[UsuarioController::class, 'update'])->name('usuario.update')->middleware('auth');

//Rol
Route::get('/rol', [RolController::class, 'index'])->name('rol')->middleware('auth');
//Ruta para eliminar
Route::delete('/rol/{id}',[RolController::class, 'destroy'])->name('rol.destroy')->middleware('auth');
//Ruta para mostrar
Route::get('/rol/{id}/ver',[RolController::class, 'show'])->name('rol.show')->middleware('auth');
//Ruta para crear
Route::get('/rol/crear', [RolController::class, 'create'])->name('rol.create')->middleware('auth');
//Ruta para guardar 
Route::post('/rol', [RolController::class, 'store'])->name('rol.store')->middleware('auth');
//Ruta para editar
Route::get('/rol/{id}/editar',[RolController::class, 'edit'])->name('rol.edit')->middleware('auth');
//Ruta para actualizar
Route::put('/rol/{id}',[RolController::class, 'update'])->name('rol.update')->middleware('auth');

//Categoria
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria')->middleware('auth');
//Ruta para eliminar
Route::delete('/categoria/{id}',[CategoriaController::class, 'destroy'])->name('categoria.destroy')->middleware('auth');
//Ruta para mostrar
Route::get('/categoria/{id}/ver',[CategoriaController::class, 'show'])->name('categoria.show')->middleware('auth');
//Ruta para crear
Route::get('/categoria/crear', [CategoriaController::class, 'create'])->name('categoria.create')->middleware('auth');
//Ruta para guardar 
Route::post('/categoria', [CategoriaController::class, 'store'])->name('categoria.store')->middleware('auth');
//Ruta para editar
Route::get('/categoria/{id}/editar',[CategoriaController::class, 'edit'])->name('categoria.edit')->middleware('auth');
//Ruta para actualizar
Route::put('/categoria/{id}',[CategoriaController::class, 'update'])->name('categoria.update')->middleware('auth');

//Producto

Route::get('/productos', [ProductoController::class, 'index'])->middleware('auth');
Route::get('cart', [ProductoController::class, 'cart'])->name('cart')->middleware('auth');
Route::get('add-to-cart/{id}', [ProductoController::class, 'addToCart'])->name('add_to_cart')->middleware('auth');
Route::patch('update-cart', [ProductoController::class, 'update'])->name('update_cart')->middleware('auth');
Route::delete('remove-from-cart', [ProductoController::class, 'remove'])->name('remove_from_cart')->middleware('auth');

Route::get('/producto', [ProductoController::class, 'index1'])->name('producto')->middleware('auth');
//Ruta para eliminar
Route::delete('/producto/{id}',[ProductoController::class, 'destroy'])->name('producto.destroy')->middleware('auth');
//Ruta para mostrar
Route::get('/producto/{id}/ver',[ProductoController::class, 'show'])->name('producto.show')->middleware('auth');
//Ruta para crear
Route::get('/producto/crear', [ProductoController::class, 'create'])->name('producto.create')->middleware('auth');
//Ruta para guardar 
Route::post('/producto', [ProductoController::class, 'store'])->name('producto.store')->middleware('auth');
//Ruta para editar
Route::get('/producto/{id}/editar',[ProductoController::class, 'edit'])->name('producto.edit')->middleware('auth');
//Ruta para actualizar
Route::put('/producto/{id}',[ProductoController::class, 'update1'])->name('producto.update')->middleware('auth');

//Pedido

Route::get('/pedido',[PedidoController::class,'index'])->name('pedido')->middleware('auth');
Route::get('/pedido/crear',[PedidoController::class,'create'])->name('pedido.create')->middleware('auth');
Route::post('/pedido',[PedidoController::class,'store'])->name('pedido.store')->middleware('auth');
Route::get('/pedido/{id}/ver',[PedidoController::class,'show'])->name('pedido.show')->middleware('auth');

