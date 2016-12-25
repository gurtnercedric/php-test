<div class="page-header">
    <center><strong><h1>Zeiterfassung</h1></strong></center>
    
 
		
		
	<div class="containter">
		<div class="row">
			<div class="col-md-12">
			<br><br>
			<div class="formclass">
			<form method="Post">
            <form class="form-inline">
			
				<p><h3>Mitarbeiter</h3></p>
                <label class="sr-only" for="Mitarbeiter">Mitarbeiter</label>
                <div class="form-group">
                  <select name="Mitarbeiter" id="mitarbeiter" class="form-control">
                    <option value="MaxMuster">Max Muster</option>
                    <option value="HansHuber">Hans Huber</option>
                  </select>
                </div>	
				<div id="checkmitarbeiter"></div>
				
				
				


				<p><h3>Datum (Jahr-Monat-Tag)</h3></p>
                <div class="form-group">
                <label class="sr-only" for="datum">Datum</label>
                <input type="date"  
						class="form-control"
                        name="datum"
                        value=""
                        placeholder="erledigte datum"
                        id="datum"
                ></div>
				<div id="checkdatum"></div>
			
			
				<p><h3>Zeit</h3></p>
                <div class="form-group">
                <label class="sr-only" for="stunden">Zeit</label>
                <input  class="form-control"
                        type="text"
                        name="stunden"
                        value=""
                        placeholder="Zeitaufwand"
                        id="stunden"
                ></div>
				<div id="checkstunden"></div>
			
			
				<p><h3>Projekt</h3></p>
                <label class="sr-only" for="Projekt">Projekt</label>
                <div class="form-group">
                  <select name="Projekt" id="projekt" class="form-control">
                    <option value="Verwaltung">Verwaltung</option>
                    <option value="Regie">Regie</option>
                  </select>
                </div>
				<div id="checkprojekt"></div>
				
			
				<p><h3>Arbeiten</h3></p>
              <div class="form-group">
                <label class="sr-only" for="arbeiten">Arbeiten</label>
                <input  class="form-control"
                        type="text"
                        name="arbeiten"
                        value=""
                        placeholder="erledigte Arbeiten"
                        id="arbeiten"

                ></div>
				<div id="checkarbeiten"></div>
				
				<p><h3>Verrechenbar</h3></p>
                <label class="sr-only" for="verrechenbar">Verrechenbar</label>
                <div class="form-group">
                  <select name="verrechenbar" id="verrechenbar" class="form-control">
                    <option value="Kunde">Kunde</option>
                    <option value="Intern">Intern</option>
					<option value="Nein">Nein</option>
                  </select>
                </div>
				<div id="checkverrechenbar"></div>


				<br>

                <div class="form-group">
                  
                  <button onclick="firstFunction()" type="button" name="javabutton" class="btn btn-success"><i class="fa fa-coffee "></i> Submit
                  </button>
                </div>
          </form>
		  
		  </div>
	   </div>
	  </div>
	</div>
		 
        

</div>