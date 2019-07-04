<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	  <link rel="stylesheet" href="chosen.css"/>
	  <script src="chosen.jquery.js"></script>
	  <title>phpflow.com : Simple Example of Searchable DropDown list Using jQuery</title>
  
      <div class="container" style="padding:50px 250px;">
	  <h1>Demo : Simple Example of Searchable DropDown list Using jQuery</h1>
		 <div>       
			<select data-placeholder="Choose a Country..." class="chzn-select" style="width:350px;" tabindex="2">
			  <option value=""></option> 
			  <option value="United States">United States</option> 
			  <option value="United Kingdom">United Kingdom</option> 
			  <option value="Afghanistan">Afghanistan</option>
			  <option value="Zambia">Zambia</option> 
			  <option value="Zimbabwe">Zimbabwe</option>
			</select>
		</div>
      </div>

<script type="text/javascript">
   $(document).ready(function(){
		$("select").chosen({allow_single_deselect:true});
   });
</script>