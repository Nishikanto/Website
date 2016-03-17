<?php
class Appointment extends \Eloquent {
	protected $fillable = ['patients_id'];
	protected $fillable = ['doctors_id'];
	protected $fillable = ['schedule'];
	protected $table='appointments';

}