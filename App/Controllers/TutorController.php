<?php
namespace App\Controllers;
use App\Models\Tutor;
use App\config\Redireccion;
class TutorController {
    use Redireccion;
    public function obtenerTutor()
    {
        $instanceTutor = new Tutor;
        $tutor = $instanceTutor->allJoin('materia');
        return $tutor;
    }
    public function buscador()
    {
        $instanceTutor = new Tutor;
        switch (isset($_REQUEST)) {
            case isset($_POST['busqueda']):
                $column = $_POST['columna'];
                $valor = $_POST['dato'];
                if($column == '*'){
                    echo $this->redirectVista("main");
                }
                $buscar = $instanceTutor->obtenerBusqueda($column, $valor);
                if(empty($buscar)){
                    echo "No se encontro ningun dato con la palabra: {$valor}";
                }else{
                    return $buscar;
                }
                break;
            default:
                # code...
                break;
        }
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
                    $id = $_GET['edit'];
                    $data = $instanceTutor->findJoin($id, 'materia');
                    return $data;
                    break;

                case isset($_POST['guardarEdit']):
                    // GUARDO LOS DATOS ACTUALIZADOS
                    $id = $_POST['id'];
                    $instanceTutor->update($id,[
                        'materia_id' => $_POST['materia'],
                        'turno_id' => $_POST['turno'],
                        'aula_id' => $_POST['aula'],
                        'nombre' => $_POST['nombre'],
                        'apellido' => $_POST['apellido']
                    ]);
                    echo $this->redirectVista("main");
                    break;

                case isset($_POST['guardarTutor']):
                    $materias = $_POST['materia'];
                    foreach($materias as $materia){
                        $instanceTutor->create([
                            'materia_id' => $materia,
                            'turno_id' => $_POST['turno'],
                            'aula_id' => $_POST['aula'],
                            'nombre' => $_POST['nombre'],
                            'apellido' => $_POST['apellido']
                        ]);
                    }
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
}
?>