<?php
namespace App\Controllers;
use App\Models\Tutor;
use App\config\Redireccion;
class TutorController {
    use Redireccion;
    public function obtenerTutor()
    {
        $instanceTutor = new Tutor;
        $tutor = $instanceTutor->all();
        return $tutor;
    }
    public function consulta()
    {
        $instanceTutor = new Tutor;
        switch (isset($_REQUEST)) 
        {
                
                case isset($_GET['eliminar']):
                    $id = $_GET['eliminar'];
                    $instanceTutor->stateOff($id);
                    echo $this->redirectVista("main");
                    break;

                case isset($_GET['activar']):
                    $id = $_GET['activar'];
                    $instanceTutor->stateOn($id);
                    echo $this->redirectVista("main");
                    break;

                case isset($_GET['edit']):
                    // OBTENER EL ID Y BUSCAR EL DATO
                    $id = $_GET['edit'];
                    // DATOS DUPLICADOS id tutor = id materia (Revisar funcion)
                    $data = $instanceTutor->findJoin($id, 'materia');
                    return $data;
                    break;

                case isset($_POST['guardarEdit']):
                    // GUARDO LOS DATOS ACTUALIZADOS
                    $id = $_POST['id_tutor'];
                    $instanceTutor->update($id,[
                        'materia_id' => $_POST['materia'],
                        'nombre' => $_POST['nombre'],
                        'apellido' => $_POST['apellido']
                    ]);
                    echo $this->redirectVista("main");
                    break;

                case isset($_POST['guardarTutor']):
                    $instanceTutor->create([
                        'nombre' => $_POST['nombre'],
                        'apellido' => $_POST['apellido'],
                        'materia_id' => $_POST['materia']
                    ]);
                    echo $this->redirectVista("main");
                    break;

                    case isset($_POST['buscarNombre']):
                        $instanceTutor->create([
                            'nombre' => $_POST['nombre'],
                            'apellido' => $_POST['apellido'],
                            'materia_id' => $_POST['materia']
                        ]);
                        break;
            default:
                # code...
                break;
        }
    }
    public function buscadorDato()
    {
        $instanceTutor = new Tutor;
        if(isset($_POST['enviarBusqueda'])){
            $column = $_POST['buscarDato'];
            $valor = $_POST['dato'];
            $buscar = $instanceTutor->where($column ,$valor)->get();
            return ($buscar);
        }
    }
}
?>