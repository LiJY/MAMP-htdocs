function init()
{

var lieu = new OpenLayers.Layer.Text( "Lieu", {location:"lieu.txt", projection: epsg4326});

var epsg4326 = new OpenLayers.Projection("EPSG:4326");

// variable
var map = new OpenLayers.Map('map', {controls:[]});



//controleur de souris
//map.addControl(new OpenLayers.Control.Navigation());
map.addControl(new OpenLayers.Control.MousePosition({displayProjection: epsg4326}));

//ajoutez une grande barre de zoom et de panoramique
map.addControl(new OpenLayers.Control.PanZoomBar());

//Ajoutez une carte d'aperçu général (petit + en bas à droite)
map.addControl(new OpenLayers.Control.OverviewMap());

//Ajoutez la position du curseur de la souris :
map.addControl(new OpenLayers.Control.MousePosition());

//Ajoutez un sélecteur de couche (petit + en haut à gauche):
map.addControl(new OpenLayers.Control.LayerSwitcher());




// couche
var osmLayer = new OpenLayers.Layer.OSM();

//couche google
var gsat = new OpenLayers.Layer.Google("Google Satellite",{type: google.maps.MapTypeId.SATELLITE, numZoomLevels: 22, sphericalMercator: true});

// ajout de couche de fond 
map.addLayer(osmLayer); 
map.addLayer(gsat);


//variable gère le lien avec "inondation.kml"
var regions = new OpenLayers.Layer.Vector("Inondation", {
	protocol: new OpenLayers.Protocol.HTTP({
		url: "inondation.kml",
		format: new OpenLayers.Format.KML({}),
		projection: epsg4326
		}),
	strategies: [new OpenLayers.Strategy.Fixed()],styleMap: new OpenLayers.StyleMap({
		"default": {
			fillColor: "#0000AA",
			strokeColor: "#0000AA",
			strokeWidth: 2,
			fillOpacity: 0.4
		}
	})
});

//levée

var levee = new OpenLayers.Layer.Vector("levee", {
	protocol: new OpenLayers.Protocol.HTTP({
		url: "levee.kml",
		format: new OpenLayers.Format.KML({}),
		projection: epsg4326
		}),
	strategies: [new OpenLayers.Strategy.Fixed()],styleMap: new OpenLayers.StyleMap({
		"default": {
			fillColor: "#0000AA",
			strokeColor: "#0000AA",
			strokeWidth: 2,
			fillOpacity: 0.4
		}
	})
});

//variable pour "recyclage.osm"
var recyclage = new OpenLayers.Layer.Vector("Points de recyclage", { 
	protocol: new OpenLayers.Protocol.HTTP({
	url: "recyclage.osm",
	format: new OpenLayers.Format.OSM({}),
	projection: epsg4326 
	}),
	strategies: [new OpenLayers.Strategy.Fixed()], 
	styleMap: new OpenLayers.StyleMap({
	"default": {
	fillColor: "#00DD00", 
	strokeColor: "#000000", 
	pointRadius: 7, 
	fillOpacity: 0.2
		}
	})
	});

//variable pour "feux_rouges.osm"
var feux_rouges = new OpenLayers.Layer.Vector("feux_rouges", { 
	protocol: new OpenLayers.Protocol.HTTP({
	url: "feux_rouges.osm",
	format: new OpenLayers.Format.OSM({}),
	projection: epsg4326 
	}),
	strategies: [new OpenLayers.Strategy.Fixed()], 
	styleMap: new OpenLayers.StyleMap({
	"default": {
	fillColor: "#FF0000", 
	strokeColor: "#000000", 
	pointRadius: 4, 
	fillOpacity: 0.9
		}
	})
	});

map.addLayer(recyclage);
map.addLayer(feux_rouges);
map.addLayer(regions);
map.addLayer(levee)
map.addLayer(lieu);
map.zoomToMaxExtent(); 

//centre la France
map.setCenter(new OpenLayers.LonLat(1.33,47.58).transform(epsg4326,map.getProjectionObject()), 14 );



}
