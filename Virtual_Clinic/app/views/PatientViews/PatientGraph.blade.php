<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>phpChart - Basic Chart</title>
</head>
<body background="image.jpg"  style = "background-size: 100% 200%;
    background-repeat: no-repeat;">


<div align="center">
    
<?php


$s1 = array();
$s2 = array();

$visitsummary = DB::table('visitsummary')
->where('patient_id', $id)
->get();


$x = 0;

foreach($visitsummary as $variable){
	
	$var = array();
	$var1 = array();
	
	array_push($var, (int)$x);
	array_push($var, (int)$variable->bp);
	array_push($var, $variable->updated_at);
	
	array_push($s1, $var);	

	array_push($var1, (int)$x);
	array_push($var1, (int)$variable->weight);
	array_push($var1, $variable->updated_at);
	
	array_push($s2, $var1);

	$x++;

}		




include_once(public_path()."/phpChart_Lite/conf.php"); 
$pc = new C_PhpChartX(array($s1, $s2),'basic_chart');
$pc->set_animate(true);
$pc->set_title(array('text'=>'Patient Info'));
$pc->add_plugins(array('highlighter', 'canvasTextRenderer'));
$pc->add_plugins(array('cursor','pointLabels','barRenderer','categoryAxisRenderer'),true);

$pc->set_axes(array(
    
    'yaxis'=>array('padMax'=>2.0)));


$pc->set_grid(array(
    'background'=>'lightyellow', 
    'borderWidth'=>0, 
    'borderColor'=>'#000000', 
    'shadow'=>true, 
    'shadowWidth'=>10, 
    'shadowOffset'=>3, 
    'shadowDepth'=>3, 
    'shadowColor'=>'rgba(230, 230, 230, 0.07)'
    ));

$pc->set_series_default(array(
           'pointLabels'=> array(
              'show'=> true,
              'escapeHTML'=> false,
              'ypadding'=> -15 
           )
       ));

$pc->set_legend(array('show'=>true));
$pc->add_series(array('label'=>'Blood Pressure'));
$pc->add_series(array('label'=>'Weight'));
$pc->draw(600,400);

$pc->draw();


?>

<a style="background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;" class="btn btn-xs btn-success btn-edit" href="patient_dashboard">Go Back</a>

</div>


</body>
</html>

