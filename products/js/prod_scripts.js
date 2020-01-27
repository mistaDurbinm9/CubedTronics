$(document).ready(function() {

function hdd_repair() {
  this.id = 0;
  this.name = "hdd_repair";
  this.cost = 114.99;
}
function hdmi_repair() {
  this.id = 1;
  this.name = "hdmi_repair";
  this.cost = 89.99;
}
function overheat_repair() {
  this.id = 2;
  this.name = "overheat_repair";
  this.cost = 99.99;
}
function discdrive_repair(){
  this.id = 3;
  this.name = "discdrive_repair";
  this.cost = 109.99;
}

var hdd = new hdd_repair();
var hdmi = new hdmi_repair();
var overheat = new overheat_repair();
var discdrive = new discdrive_repair();

$('.more-info-icon').click(function(){
  var modalName = $(this).attr("name");
  console.log($('div[name="'+modalName+'"]'));
  $('div[name="'+modalName+'"]').css({display: 'block'});
});

$('.close').click(function(){
  $(this).parent().parent().css({display: 'none'});
});

var products=[];
        $('input:checkbox').click(function(){
          var id = $(this).attr("data-id");
          var name=$(this).val().trim();
          if(this.checked)
          {
            if(id==0){
              products.push(hdd);
            } else if(id==1){
                products.push(hdmi);
            } else if(id==2){
                products.push(overheat);
            }else if(id==3){
              products.push(discdrive);
            }
        }
        else{
            var index=products.indexOf(name);
            if(index > -1){
              products.splice(index, 1);
              console.log('Remove: ' + name + ' at index: ' + index);
            }
            for(var i = 0; i < products.length; i++) {
              if(products[i].id == id) {
                  products.splice(i, 1);
                  break;
              }
          }
      }
      var total = 0;
      $('#result').html(products.join('; '));
      $.each(products, function(){
        if(this.checked){
          total-=this.cost;
        }else{
          total+=this.cost;
        }

      })
      console.log(total);
      $("#total" ).text( "Total: $" + total.toFixed(2) );
      console.log(products);
  });
});
