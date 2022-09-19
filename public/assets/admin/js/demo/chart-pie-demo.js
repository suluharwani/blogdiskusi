var loc = window.location;
var base_url = loc.protocol + "//" + loc.hostname + (loc.port? ":"+loc.port : "") + "/";
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function data_status(){
  $.ajax({
    type  : 'post',
    url   : base_url+'/admin/nama_status_pendaftar_chart',
    async : false,
    dataType : 'json',
    success : function(data){
      a = data;
    }
  });
  return a
}
function data_status_total(){
  $.ajax({
    type  : 'post',
    url   : base_url+'/admin/jumlah_status_pendaftar_chart',
    async : false,
    dataType : 'json',
    success : function(data){
      b = data;
    }
  });
  return b
}
let bgColor = ['#4e73df', '#1cc88a', '#aa2233', '#555555'];
let hoverBgColor = ['#2e59d9', '#17a673', '#bb1133', '#001111'];
function stat_src(bgColor){
  data = data_status();
  stat ='';
  for (var i = 0; i < data.length; i++) {
    stat += `<span class="mr-2">`+
        `<i class="fas fa-circle" style="color:${bgColor[i]}"></i> ${data[i]}`+
    `</span>`;
  }

$('#labelchart').html(stat);
}
stat_src(bgColor);
// Pie Chart Example
var ctx = document.getElementById("myPieChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: data_status(),
    datasets: [{
      data: data_status_total(),
      backgroundColor: bgColor,
      hoverBackgroundColor: hoverBgColor,
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});
