<h1>View 1</h1>
          <div class="rect img_1-1">
          </div>
          <div class="square img_1-1">
          </div>
          <div class="square img_1-1">
          </div>
          <div class="square img_1-1">
          </div>
          <div class="rect2 img_1-1">
          </div>
          <div class="square img_1-1">
          </div>

<script>


var date = new Date();
var formattedDate = moment(date).format('YYYY-MM-DD');


//grab TFC api data and save to var
    $.ajax({
        dataType: "json",
        url: "http://api.tmpforchch.co.nz/v3/tmps?key=75565CFFEDC8FF92CF14744F4E47F&?=json&startdate=" + formattedDate + "&enddate=" + formattedDate + "&limit=99999",
        contentType: 'text/plain',
        success: function(data){
            console.log(data);
        }
    });


</script>