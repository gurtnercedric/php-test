/*  Der gesamte Inhalt dieser Datei ist als Beispiel zur Verfügung gestellt
    und kann somit ganz entfernt werden, wenn Sie den nicht brauchen. */

$(document).ready(function() {
    // Alles in dieser Anweisung wird direkt beim Starten der Applikation ausgeführt.
    console.log('Viel Erfolg bei der Umsetzung der Projektarbeit!')
});




function firstFunction(){
  console.log('Applikation initialisiert....');
	var check = false;
	
  var mitarbeiter = $('#mitarbeiter').val();
  var datum = $('#datum').val();
  var stunden = $('#stunden').val();
  var projekt = $('#projekt').val();
  var arbeiten = $('#arbeiten').val();
  var verrechenbar = $('#verrechenbar').val();
  
	var fehleingabe1 = '';
	$('#checkdatum').html(fehleingabe1);
	var fehleingabe2 = '';
	$('#checkstunden').html(fehleingabe2);
	var fehleingabe3 = '';
	$('#checkarbeiten').html(fehleingabe3);



  if(mitarbeiter && datum && stunden && projekt && arbeiten && verrechenbar) {
    check = true;
  }

  if(check) {


    $('#mitarbeiter').val(mitarbeiter);


    $.ajax({
      type:"POST",
      url:"php/ajax.php",
      data: { mitarbeiter: mitarbeiter, datum: datum, stunden: stunden, projekt: projekt, arbeiten: arbeiten, verrechenbar: verrechenbar },
      dataType: "JSON",
      beforeSend: function(){
        console.log('Daten werden abgerufen...');
      },
      success: function(daten){
        console.log('success: ' + daten);
		if (daten.status) {	
			var html = '<tr>\
						<td class="capitalize">'+daten.mitarbeiter+'</td>\
						<td class="capitalize">'+daten.datum+'</td>\
						<td class="capitalize">'+daten.stunden+'</td>\
						<td class="capitalize">'+daten.projekt+'</td>\
						<td class="capitalize">'+daten.arbeiten+'</td>\
						<td class="capitalize">'+daten.verrechenbar+'</td>\
						<td class="capitalize"></td>\
					</tr>';
							
			
        $('#ergebnis').append(html).removeClass('hidden');
		$('#ausgabe').removeClass('hidden');
		}
		
      },
      error: function(error){
        console.log('fehler: ' + error);
		      var achtung = '<div class="fehler">\
                <h4>Fehler bei der Bearbeitung</h4>\
                </div>';
        $('#fehler').html(achtung).removeClass('hidden');
      },
      complete: function(){

      },
    });
  } else if(!check) {
	  

	var checkdatum = false;
	var checkstunden = false;
	var checkarbeiten = false;

	
	if(!datum){
		checkdatum = true;
	}
	
	if(!stunden){
		checkstunden = true;
	}
	

		if(!arbeiten){
		checkarbeiten = true;
	}
	

		
		if(checkdatum){
			fehleingabe1 = '<div class="fehler">\
                <h4>Fehler bei der Eingabe des Datums</h4>\
                </div>';
			$('#checkdatum').html(fehleingabe1);
		}
		
		if(checkstunden){
			fehleingabe2 = '<div class="fehler">\
                <h4>Fehler bei der Eingabe der Stunden</h4>\
                </div>';
			$('#checkstunden').html(fehleingabe2);
		}
		
		
		if(checkarbeiten){
			fehleingabe3 = '<div class="fehler">\
                <h4>Fehler bei der Eingabe der Arbeiten</h4>\
                </div>';
			$('#checkarbeiten').html(fehleingabe3);
		}
		

	
  
  
  
	} else {
		console.log('undefined error');
	}
}




// Einfache IF Bedingung
function einJavaScript() {
    var test = 0;
    if (test == 0) {
        // do stuff
    } else {
        // do other stuff
    }
}

// Einfache IF Bedingung mit einer FOR Schleife
function weiteresScript(data) {
    if (data) {
        for (var i = 0; i < 100; i++) {
            // loop stuff
        }
    }
}

// Einfache AJAX Anfrage als Vorlage
function einAjaxRequest() {
    var check = false;
    var id = 0;
    var name = 'name';
    var action = 'etwas';

    if (id && name && action) {
        check = true;
    }

    if (check) {
        $.ajax({
            type: "POST", // kann GET, POST, PUT, DELETE sein
            url: "ajax.php", // wo werden die Daten hingeschickt?
            data: { id: id, name: name, action: action }, // welche parameter werden übergeben
            dataType: "JSON",
            success: function(response) {
                console.log(response);
            }
        });
    }
}