<?php
	include 'components/header.php'; 
 ?>
    
    
    <div class="container">
    	<main>
       
       		<div class="article">
       			<h1>Rendelés!</h1>
        		<p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et officiis quasi nobis, cumque praesentium quam. Dolores beatae natus totam maiores aliquid voluptatum odit deleniti aut animi magnam cupiditate, mollitia eum obcaecati vitae consectetur dicta accusantium!</p>
       		</div>
       		
       		
       		
       		
<?php

if(isset($_POST['button']))
{
	$vnev = $_POST['vnev'];
	$knev = $_POST['knev'];
	$bab = $_POST['bab'];
	$kave = $_POST['kave'];
	$megjegyzes = $_POST['megjegyzes'];
	$datum = $_POST['datum'];
	$lakcim = $_POST['lakcim'];
	$emelet = $_POST['emelet'];
	$orszag = $_POST['orszag'];
	$megye = $_POST['megye'];
	$varos = $_POST['varos'];
	$iranyitoszam = $_POST['iranyitoszam'];
	


	if($vnev && $knev && $bab && $kave && $datum && $lakcim && $orszag && $megye && $varos && $iranyitoszam)
	{
		$line = $vnev .';'. $knev. ';'. $bab. ';'. $kave. ';'. $megjegyzes. ';'. $datum. ';'. $lakcim. ';'. $emelet. ';'. $orszag. ';'. $megye. ';'. $varos. ';'.$iranyitoszam. ';0';

		$file = fopen('content/orders.txt', 'a');
		fwrite($file, $line. PHP_EOL); //php_eol end of line-t jelzi
		fclose($file);


		echo '<p class="message success"><strong>Rendelését rögzítettük!</strong> Koszonjuk a hogy nálunk várásolt!</p>';	
	}
	else
	{
		echo '<p class="message error"><strong>Lorem ipsum</strong> dolor sit amet, consectetur adipisicing elit. Itaque, iste veniam.</p>';
	}

}
?>

<form action="rendeles.php" method="POST">
	<section class="order-form m-4">
	  <div class="container pt-4">
		  <div class="row">
			  <div class="col-12 px-4">
				  <h1>Adja le rendelését!</h1>
				  <span>A csillaggal jelölt mezőket nem hagyhatja üresen!</span>
				  <hr class="mt-1" />
			  </div>

			  <div class="col-12">
				  <div class="row mx-4">
					  <div class="col-12">
						  <label class="order-form-label">Név *</label>
					  </div>
					  <div class="col-sm-6">
						  <div class="form-outline">
							  <input type="text" id="vnev" name="vnev" class="form-control order-form-input" />
							  <label class="form-label" for="vnev">Vezetéknév</label>
						  </div>
					  </div>
					  <div class="col-sm-6 mt-2 mt-sm-0">
							<div class="form-outline">
								<input type="text" id="knev" name="knev" class="form-control order-form-input" />
								<label class="form-label" for="knev">Keresztnév</label>
							</div>
					  </div>
				  </div>

				  <div class="row mt-3 mx-4">
					  <div class="col-12">
						  <label class="order-form-label">Válasszon az alábbi kávébabjaink közül! *</label>
					  </div>
					  <div class="col-12">
						  <div class="form-outline">
							  <select id="bab" name="bab">
								<option value="0"></option>
								<option value="5">Caffé Corsini</option>
								<option value="4">Illycaffé</option>
								<option value="3">Hausbrandt Espresso</option>
								<option value="2">Lavazza</option>
								<option value="1">Omnia</option>
							</select>
						  </div>
					  </div>
				  </div>

				  <div class="row mt-3 mx-4">
					  <div class="col-12">
						  <label class="order-form-label">Válasszon az alábbi kávé fajtáink közül! *</label>
					  </div>
					  <div class="col-12">
						  <div class="form-outline">
							  <select id="kave" name="kave">
							  	<option value="0"></option>
							  	<option value="6">Americano</option>
								<option value="5">Chai latte</option>
								<option value="4">Dirty chai</option>
								<option value="3">Cappuccino</option>
								<option value="2">Espresso</option>
								<option value="1">Latte machiatto</option>
							</select>
						  </div>
					  </div>
				  </div>

				  <div class="row mt-3 mx-4">
					  <div class="col-12">
						  <label class="order-form-label">Egyéb megjegyzés a rendeléshez?</label>
					  </div>
					  <div class="col-12">
						  <div class="form-outline">
							  <input type="text" id="megjegyzes" name="megjegyzes" class="form-control order-form-input" />
						  </div>
					  </div>
				  </div>

				  <div class="row mt-3 mx-4">
					  <div class="col-12">
						  <label class="order-form-label" for="date-picker-example">Dátum *</label>
					  </div>
					  <div class="col-12">
						  <div class="form-outline datepicker" data-mdb-toggle-button="false">
							  <input
							  type="text" class="form-control order-form-input" id="datum" name="datum" data-mdb-toggle="datepicker" />
							  <label for="datum" class="form-label">(ÉÉÉÉ.HH.NN)</label>
						  </div>
					  </div>
				  </div>

				  <div class="row mt-3 mx-4">
					  <div class="col-12">
						  <label class="order-form-label">Lakcím *</label>
					  </div>
					  <div class="col-12">
						  <div class="form-outline">
							  <input type="text" id="lakcim" name="lakcim" class="form-control order-form-input" />
							  <label class="form-label" for="lakcim">Utca neve, házszám</label>
						  </div>
					  </div>
					  <div class="col-12 mt-2">
						  <div class="form-outline">
							  <input type="text" id="emelet" name="emelet" class="form-control order-form-input" />
							  <label class="form-label" for="emelet">Emelet (ha szükséges)</label>
						  </div>
					  </div>
					  <div class="col-sm-6 mt-2 pe-sm-2">
						  <div class="form-outline">
							  <input type="text" id="orszag" name="orszag" class="form-control order-form-input" />
							  <label class="form-label" for="orszag">Ország *</label>
						  </div>
					  </div>
					  <div class="col-sm-6 mt-2 ps-sm-0">
						  <div class="form-outline">
							  <input type="text" id="megye" name="megye" class="form-control order-form-input" />
							  <label class="form-label" for="megye">Megye *</label>
						  </div>
					  </div>
					  <div class="col-sm-6 mt-2 pe-sm-2">
						  <div class="form-outline">
							  <input type="text" id="varos" name="varos" class="form-control order-form-input" />
							  <label class="form-label" for="varos">Város *</label>
						  </div>
					  </div>
					  <div class="col-sm-6 mt-2 ps-sm-0">
						  <div class="form-outline">
							  <input type="text" id="iranyitoszam" name="iranyitoszam" class="form-control order-form-input" />
							  <label class="form-label" for="iranyitoszam">Irányítószám *</label>
						  </div>
					  </div>
				  </div>

				  <div class="row mt-3 mx-4">
					  <div class="col-12">
						  <div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
							  <label class="form-check-label" for="flexCheckDefault">Elfogadom a rendelés feltételeit!</label>
						  </div>
					  </div>
				  </div>

				  <div class="row mt-3">
					  <div class="col-12">
						  <button type="submit" id="btnSubmit" name="button" class="orderbutton">Rendelés leadása</button>
					  </div>
				  </div>
			  </div>
		  </div>
	  </div>
	</section>
</form>
       		
    </main>
    	
<?php
	include 'components/aside.php'; 
 ?>
    </div>

<?php
	include 'components/footer.php'; 
 ?>