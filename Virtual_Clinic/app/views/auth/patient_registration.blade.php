<!DOCTYPE html>
<html>
<head>

<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
.form-style-10{
    width:700px;
    padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
    padding: 30px;
    background: #dbdcda;
    border-radius: 6px;
    margin-bottom: 15px;
}
.form-style-10 h1{
    background: #2A88AD;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 40px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
    display: block;
    margin-top: 2px;
    font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
    display: block;
    font: 20px Arial, Helvetica, sans-serif;
    color: #2A88AD;
    margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 2px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
    font: normal 28px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
.form-style-10 .section span {
    background: #2A88AD;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"]{
    background: #2A88AD;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 15px;
}
.form-style-10 input[type="button"]:hover, 
.form-style-10 input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
    float: right;
    width: 250px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #4D4D4D;
    margin-top: 10px;
    text-align: right;
}


$green: #27ae60;
$dark-green: #16a085;

*, *:before, *:after {
  -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
 }

/*html, body {
  margin: 0;
  padding: 5em 1em;
  width: 100%;
  height: 100%;
  }
*/
/*body {
  padding: 15em 2em;
  background-image: url("image.jpg");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  }*/

@import url(http://fonts.googleapis.com/css?family=Covered+By+Your+Grace);

h1 {
  text-align: center;
  font-size: 300%;
  font-family: 'Covered By Your Grace', cursive;
  font-weight: 300;
  margin-top: 3em;
  text-shadow: 0 3px 2px white;
  color: #000000;
  }

#box {
  margin: auto;
  width: 50em;
  @media all and (max-width: 52em) {
    width: 100%;
    }
  height: 100%;
  white-space: nowrap;
  }
#center {
  vertical-align: middle;
  display: inline-block;
  white-space: normal;
  }
#box:after {
  content: "";
  width: 1px;
  height: 100%;
  vertical-align: middle;
  display: inline-block;
  margin-right: -10px;
  }


}

table {
  background-color: white;
  padding: 1em;
  &, * {
    border-color: $green !important;
    }
  th {
    text-transform: uppercase;
    font-weight: 500;
    text-align: center;
    color: white;
    background-color: $green;
    position: relative;
    &:after {
      content: "";
      display: block;
      height: 5px;
      right: 0;
      left: 0;
      bottom: 0;
      background-color: $dark-green;
      position: absolute;
      }
    }
  }
  th { padding: 1.5rem; font-size: 1.5rem; }
   td { padding: 1.2rem; font-size: 1.2rem; }




tr:nth-child(odd) { background-color: #E0E0E0; }

tr:nth-child(even) { background-color: #CE7C68; }
.pure-table thead tr {
    background-color: #2A3542;
    color: #fff;
}

table tr td, thead tr th {
    text-align: center;
}

tr:hover:not(#firstrow) { transform: scale(1.2); font-weight: 600; box-shadow: 0px 3px 7px rgba(0, 0, 0, 0.5);}

#credits {
  text-align: right;
  color: white;
  a {
    color: $dark-green;
    text-decoration: none;
    &:hover {
      text-decoration: underline;
      }
    }
  }


</style>

</head>
<body>


<div class="form-style-10">
<h1>Ragistraition</h1>
{{ Form::open(array('route' => 'registration', 'files' => true, 'method' => 'post', 'class' => 'form-registration', 'enctype' => "multipart/form-data")) }}
    
    <div class="section"><span>1</span>Accounts Informations</div>
    <div class="inner-wrap">
        <label>Email<input type="text" name="field_email" /></label>
        <label>Password<input type="password" name="field_password" /></label>
        <label>Confirm Password<input type="password" name="field_password" /></label>
    </div>

    <div class="section"><span>2</span>Details Informations</div>
    <div class="inner-wrap">
        <label>Patient's Name<input type="text" name="field_name"/></label>
        
        <label>Date of Birth
        <input name="field_dob"type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth"/></label>
        
        <label>Gender <select type="text" name="field_gender">
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select></label>

        <label>religion<select type="text" name="field_religion" >
          <option value="Muslim">Muslim</option>
          <option value="Hindu">Hindu</option>
        </select></label>
        
        <label>Number of Visit<input type="text" name="field_visitNo"/></label>
        
        {{ Form::label('Patient Image') }}
        {{ Form::file('field_image') }}

        <br/><br/>
        <input type="submit" name=submit></input></label>
    </div>

{{ Form::close() }}

</div>