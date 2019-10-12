
		<div class="row">
			<div class="col-md-6">
				<form>
                    {{csrf_field()}}
					<div class="row">
					<div class="col-md-6 form-group">
						<label for="usr">BI-RADS assessment</label>
						<select class="form-control" id="assessment">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
					<div class="col-md-6 form-group">
						<label for="usr">Age</label>
		  				<input type="text" class="form-control" id="age" value="{{!empty(auth()->user()->age) ? auth()->user()->age:''}}">
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 form-group">
						<label for="usr">Shape</label>
						<select class="form-control" id="shape">
							<option value="1">Round</option>
							<option value="2" >Oval</option>
							<option value="3">Loblur</option>
							<option value="4">Irregular</option>
						</select>
					</div>
					<div class="col-md-6 form-group">
						<label for="usr">Margin</label>
						<select class="form-control" id="margin">
							<option value="1">Circumscribed</option>
							<option value="2">Microlobulated</option>
							<option value="3">Obscured</option>
							<option value="4">Ill-defined</option>
							<option value="5">Spiculated</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 form-group">
						<label for="usr">Density</label>
						<select class="form-control" id="density">
							<option value="1">High</option>
							<option value="2">Iso</option>
							<option value="3">Low</option>
							<option value="4">Fat-containing</option>
						</select>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<button type="button" class="login100-form-btn" id="hit">See Result</button>
					</div>
				</div>

		</form>
			</div>
			<div class="col-md-6" style="display: flex;justify-content: center;">
				<div class="text-center " style="margin:25px; ">
					<img src="img/loading.gif" alt="" id="loading" style="display: none">
					<h1 style="padding: 120px; display: none" id="resultStatus"></h1>
				</div>
			</div>
		</div>	


	<script type="text/javascript">
		var assessment,age,shape,margin,density,result;

        var loading = document.getElementById('loading');
        var resultStatus = document.getElementById('resultStatus');

		function visibleMyContent() {


            loading.style.display = 'block';

            setTimeout(function(){

                loading.style.display = 'none';
                resultStatus.style.display ='block';

            }, 2000);

        }

		



		var hit = document.getElementById('hit');
		hit.addEventListener("click", showMyData);


			function showMyData(){
                loading.style.display = 'none';
                resultStatus.style.display ='none';

				 assessment = document.getElementById('assessment');
				assessment = parseInt(assessment.options[ assessment.selectedIndex].value);

				 age = parseInt(document.getElementById('age').value);

				 shape = document.getElementById('shape');
				shape = parseInt(shape.options[ shape.selectedIndex].value);

				 margin = document.getElementById('margin');
				margin = parseInt(margin.options[ margin.selectedIndex].value);

				 density = document.getElementById('density');
				density = parseInt(density.options[ density.selectedIndex].value);


				// console.log(assessment);
				// console.log(age);
				// console.log(shape);
				// console.log(margin);
				// console.log(density);


                visibleMyContent();

				  $.ajax({
			    	type: "POST",
			    	url: "http://localhost:5000/predict",
			    	data: JSON.stringify(
			    		[{"Score":assessment,
						"Age":age,
						"Shape":shape,
						"Margin":margin,
						"Density":density
						}]
			    	),
			    	contentType: 'application/json',

				}).done(function (data) {

					var showData = data.prediction;
					result = showData;

				    if(showData == "1"){
				    	document.getElementById('resultStatus').innerHTML = "Malignant";
						storeResut();

				    }else if(showData == "0"){
				    	document.getElementById('resultStatus').innerHTML = "Benign";
						storeResut();
				    }else{
				    	document.getElementById('resultStatus').innerHTML = "Error detected";
				    }
				});
			 }

			 function storeResut() {
				 $.ajax({
					 method: 'GET',
					 url: '/store/genedated',
					 data: {
						 "Score": assessment,
						 "Age": age,
						 "Shape": shape,
						 "Margin": margin,
						 "Density": density,
						 "Result": result,
					 },
					 success: function( response ){
						 console.log( response );
					 },
					 error: function( e ) {
						 console.log(e);
					 }
				 })
			 }
  </script>

