
var criteria_arr = new Array("Department", "County", "Period");

var s_a = new Array();
s_a[0]="";
s_a[1]="Electrical|Building & Civil|Computing and IT|Business|Applied Science|Maths and Physics|Mechanical|";
s_a[2]="Nairobi|Bomet|Embu|Kisumu|Siaya|Mombasa|Tana River|Taita Taveta|Narok|Laikipia|Machakos|Kilifi|Lamu|Kwale|Kericho|Uasin Gishu|Kiambu|Mandera|Wjajir|Garissa|Marsabit|Isiolo|Kisii|Makueni|Muranga|Kirinyaga|Kiambu|Meru|Tharaka Nithi|Kitui|Nyandarua|Nyeri|";
s_a[3]="Jan - April|May - Aug|Sep - Dec";

function print_results(results_id){
	// given the id of the <select> tag as function argument, it inserts <option> tags
	var option_str = document.getElementById(results_id);
	option_str.length=0;
	option_str.options[0] = new Option('Select Criteria','');
	option_str.selectedIndex = 0;
	for (var i=0; i<criteria_arr.length; i++) {
		option_str.options[option_str.length] = new Option(criteria_arr[i],criteria_arr[i]);
	}
}

function print_state(state_id, state_index){
	var option_str = document.getElementById(state_id);
	option_str.length=0;	
	option_str.options[0] = new Option('Select Choice','');
	option_str.selectedIndex = 0;
	var state_arr = s_a[state_index].split("|");
	for (var i=0; i<state_arr.length; i++) {
		option_str.options[option_str.length] = new Option(state_arr[i],state_arr[i]);
	}
}
