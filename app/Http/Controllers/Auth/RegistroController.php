<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registro; // O App\Models\Registro si usas el nuevo modelo
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegistroController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register'); // Asegúrate de tener una vista llamada register.blade.php
    }

    public function registro(Request $request)
    {
        // Validar los datos del formulario
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed', // Asegúrate de tener un campo de confirmación de contraseña
        ]);

        // Si la validación falla, redirigir de vuelta con errores
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Crear el usuario
        $Registro = Registro::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Encriptar la contraseña
        ]);

        // Opcional: Autenticar al usuario después del registro
        // auth()->login($user);

        // Redirigir a una página de éxito o al inicio
        return redirect()->route('welcome')->with('success', 'Registro exitoso. Puedes iniciar sesión.');
    }
}