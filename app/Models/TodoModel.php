<?php	

namespace App\Models;

use CodeIgniter\Model;

class TodoModel extends Model
{

	protected $table = 'todo';
	protected $primaryKey = 'id';
	protected $returnType = 'object';
	protected $useTimesStamps = true;
	protected $allowedFields = [
		 'task', 'start_date', 'end_date', 'status'
	];

}

?>
    	