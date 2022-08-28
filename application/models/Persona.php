<?php  
    class Persona extends CI_Controller{


    public function agregar($persona) {
            $this->db->insert('alumnos', $persona);
        }//end agregar

    public function seleccionar_todo()
    {
        $this->db->select('*');   
        $this->db->from('alumnos');
        return $this->db->get()->result();
    }
    
    public function eliminar($id_persona) {
        $this->db->where('alumno', $id_persona);
        $this->db->delete('alumnos');
    }

    public function actualizar($persona, $id_persona) {
        $this->db->where('alumno', $id_persona);
        $this->db->update('alumnos', $persona);
    }//end actualizar

       

    }
?>