<div id="view_1">
    <h4>TFC Data</h4>
    <a href="#roadWorks"><div class="rect img_1-1">
        <span id="tfcCount"></span>
    </div></a>
    <a href="#roadEvents"><div class="square img_1-1">
        <span id="tfcCount"></span>
    </div></a>
    <div class="square img_1-1">
        <span id="tfcCount"></span>
    </div>
    <div class="square img_1-1">
        <span id="tfcCount"></span>
    </div>
    <div class="rect2 img_1-1">
        <span id="tfcCount"></span>   
    </div>
    <div class="square img_1-1">
        <span id="tfcCount"></span>
    </div>
</div>



<script>


var date = new Date();
var formattedDate = moment(date).format('YYYY-MM-DD');

var tfcTile = $($('nav > ul > li')[0]).find('div');
var tfcTiles = $('#view_1').find('div');

//TFC Traffic variables
var tfcData;

var tfcCount,
    tfcRoadWorks = [],
    tfcRoadClosures = [],
    tfcEvents = [];
//grab TFC api data and save to var

function updateTFC() {
    $.ajax({
        dataType: "json",
        url: "http://api.tmpforchch.co.nz/v3/tmps?key=75565CFFEDC8FF92CF14744F4E47F&?=json&startdate=" + formattedDate + "&enddate=" + formattedDate + "&limit=99999",
        contentType: 'text/plain',
        success: function(data){
            console.log(data);

            tfcData = data.tmps;
            tfcCount = tfcData.length;
			for (i = 0; i < tfcData.length; i++) {
                var currentData = tfcData[i];

                //roadworks
                if (currentData.jobtype == 'Road Works') {
                    tfcRoadWorks.push(currentData);
                };
                if (currentData.jobtype == 'Event') {
                    tfcEvents.push(currentData);
                };        
                if (currentData.roadclosurestatus == 'Road Closure') {
                    tfcRoadClosures.push(currentData);
                };      
            };

            //update tiles
            var tfcHTML;
            tfcHTML = '';
            tfcHTML += '<h4>Traffic</h4>';
            tfcHTML += '<p>Currently '+ tfcCount +' planned road works</p>';
            $(tfcTile).html(tfcHTML);

            //update subtiles
            tfcHTML = '';
            tfcHTML += '<h4>Road Works</h4>';
            tfcHTML += '<p>'+ tfcRoadWorks.length +' planned Road Works</p>';
            $(tfcTiles[0]).html(tfcHTML);

			for (i = 0; i < tfcRoadWorks.length; i++) {
                var currentData = tfcRoadWorks[i];

                // generate roadworks list
                tfcHTML = '<div id="'+ currentData.id +'">';
                tfcHTML += '<h5>'+currentData.title+'</h5>';
                tfcHTML += '<p>'+ currentData.publicdescription +'</p>';
                tfcHTML += '<p>'+ currentData.address +'</p>';

                tfcHTML += '</div><hr>';

                $('div#roadWorks').append(tfcHTML);
            };            

            tfcHTML = '';
            tfcHTML += '<h4>Events</h4>';
            tfcHTML += '<p>'+ tfcEvents.length +' roads affected by events</p>';
            $(tfcTiles[1]).html(tfcHTML);   

			for (i = 0; i < tfcEvents.length; i++) {
                var currentData = tfcEvents[i];

                // generate roadworks list
                tfcHTML = '<div id="'+ currentData.id +'">';
                tfcHTML += '<h5>'+currentData.title+'</h5>';
                tfcHTML += '<p>'+ currentData.publicdescription +'</p>';
                tfcHTML += '<p>'+ currentData.address +'</p>';

                tfcHTML += '</div><hr>';

                $('div#roadEvents').append(tfcHTML);
            };                        

            tfcHTML = '';
            tfcHTML += '<h4>Roads Closed</h4>';
            tfcHTML += '<p>'+ tfcRoadClosures.length +' roads closed</p>';
            $(tfcTiles[2]).html(tfcHTML);                  

        }
    });
}
    


</script>


<div id="roadWorks">
    <a href="#view_1"><h2>Back</h2></a>
</div>

<div id="roadEvents">
    <a href="#view_1"><h2>Back</h2></a>
</div>