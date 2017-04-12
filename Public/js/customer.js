$(function(){
    $("#province").change(function(){
        var provinceid = $('#province option:selected').val();
        getCitiesByProvince(provinceid);
    });

    $("#city").change(function(){
        var cityid = $('#city option:selected').val();
        getAreasByCity(cityid);
    });
});

function deleteCustomer(customer_id)
{
    if (confirm("确认要删除该客户吗？")) {
        $.ajax({
             type: "post",
             url: "/customer/deleteCustomer",
             data: {customer_id:customer_id},
             dataType: "json",
             success: function(data){
                 if (data.result > 0) {
                     $("#trcustomer_"+customer_id).remove();
                 }
              }
         });
    }
}

function getCitiesByProvince(provinceid)
{
    $.ajax({
         type: "get",
         url: "/customer/getCitiesByProvince",
         data: {province_id:provinceid},
         dataType: "json",
         success: function(data){
             var str = "";
             $.each(data, function(key, val){
                 str += "<option value='"+val.cityid+"'>"+val.city+"</option>";
             });
             $("#city").html(str);
          }
     });
}

function getAreasByCity(cityid)
{
    $.ajax({
         type: "get",
         url: "/customer/getAreasByCity",
         data: {city_id:cityid},
         dataType: "json",
         success: function(data){
             var str = "";
             $.each(data, function(key, val){
                 str += "<option value='"+val.areaid+"'>"+val.area+"</option>";
             });
             $("#area").html(str);
          }
     });
}
