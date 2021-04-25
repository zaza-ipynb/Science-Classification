<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ url_for('static', filename='css/bootstrap.min.css') }}" rel="stylesheet">

	<title>Home</title>

    {% block head %}{% endblock %}
	<style type="text/css">
	.formnilaikd{
		width:50px;
	}

	.nilaikdw{
		width:90px;
	}

	</style>
</head>
<body>

	<div id="container">
		<table class="table table-light">
			<tr>
				<th colspan="12"><h2 class="text-center">PEMINATAN</h2></th>
			</tr>
			<tr>
				<td colspan="6" class="table-active">
				NOTE
				<!-- TABEL KET. KOMPETENSI DASAR -->
				</td>
				<td colspan="6"></td>
			</tr>
			<tr>
			<form class="">
				<td>
				<div class="form-floating nilaikdw">
                    <label for="floatingInputValue">KD 3.1</label>
					<input type="email" class="form-control" id="floatingInputValue" placeholder="Value" value="">
				</div>
				</td>
				<td>
				<div class="form-floating nilaikdw">
                    <label for="floatingInputValue">KD 3.2</label>
                	<input type="email" class="form-control" id="floatingInputValue" placeholder="Value" value="">
				</div>
				</td>
				<td>
				<div class="form-floating nilaikdw">
					<label for="floatingInputValue">KD 3.3</label>
					<input type="email" class="form-control" id="floatingInputValue" placeholder="Value" value="">
				</div>
				</td>
				<td>
				<div class="form-floating nilaikdw">
					<label for="floatingInputValue">KD 3.4</label>
					<input type="email" class="form-control" id="floatingInputValue" placeholder="Value" value="">
					
				</div>
				</td>
				<td>
				<div class="form-floating nilaikdw">
					<label for="floatingInputValue">KD 3.5</label>
					<input type="email" class="form-control" id="floatingInputValue" placeholder="Value" value="">
					
				</div>
				</td>
				<td>
				<div class="form-floating nilaikdw">
					<label for="floatingInputValue">KD 3.6</label>
					<input type="email" class="form-control" id="floatingInputValue" placeholder="Value" value="">
					
				</div>
				</td>
				<td>
				<div class="form-floating nilaikdw">
					<label for="floatingInputValue">KD 3.7</label>
					<input type="email" class="form-control" id="floatingInputValue" placeholder="Value" value="">
					
				</div>
				</td>
				<td>
				<div class="form-floating nilaikdw">
					<label for="floatingInputValue">KD 3.8</label>
					<input type="email" class="form-control" id="floatingInputValue" placeholder="Value" value="">
					
				</div>
				</td>
				<td>
				<div class="form-floating nilaikdw">
					<label for="floatingInputValue">KD 3.9</label>
					<input type="email" class="form-control" id="floatingInputValue" placeholder="Value" value="">
					
				</div>
				</td>
				<td>
				<div class="form-floating nilaikdw">
					<label for="floatingInputValue">KD 3.10</label>
					<input type="email" class="form-control" id="floatingInputValue" placeholder="Value" value="">
					
				</div>
				</td>
				<td>
				<div class="form-floating nilaikdw">
					<label for="floatingInputValue">KD 3.11</label>
					<input type="email" class="form-control" id="floatingInputValue" placeholder="Value" value="">
					
				</div>
				</td>
				<td><input type="submit" class="btn btn-success" style="height:54px;"></td>
			</form>
			</tr>
				<td colspan="12"><h5>RESULT PREDICTION</h5>
                </td>
            </tr>
            <tr>
                <td colspan="12">
                
				</td>
			
			</tr>
		</table>
        <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td> </td>
                        {% for label in labels %}
                        <td>{{ label}}</td>
                        {% endfor %}
                    </tr>

                    {% for row in dataframe %}
                    <tr>
                        <td> <b>{{ loop.index }}</b> </td>
                        {% for data in row %}
                        <td> {{ data }} </td>
                        {% endfor %}
                    </tr>
                    {% endfor %}

                </table>
                </div>
	</div>
	<script src="{{ url_for('static', filename='js/bootstrap.js') }}" ></script>  
	<script src="{{ url_for('static', filename='js/bootstrap.min.js') }}" ></script>
	<script src="{{ url_for('static', filename='js/bootstrap.bundle.js') }}" ></script>
	<script src="{{ url_for('static', filename='js/bootstrap.undle.min.js') }}" ></script>
    {% block body %} {% endblock %}
</body>
</html>