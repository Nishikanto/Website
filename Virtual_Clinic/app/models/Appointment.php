<?php
class Appointment extends \Eloquent {
	protected $fillable = ['id'];
	protected $table='appointments';

	protected $date = 'schedule';

}