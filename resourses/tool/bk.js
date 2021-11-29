

var link = ['searchMonHocDangKy.action','dangKy.action'
]
function tool(NLMHId){
    let success = false
     
    var run  = setInterval(function(){
        var dataString =  "msmh=" + NLMHId;
         
        

        jQuery.ajax({
			type: 'POST',
			url:   'searchMonHocDangKy.action',
			data: dataString,
			success: function(response) {
                 console.log(response)
                
            },
            error: function(){
                console.log("fail")
            }
        })
     },3000)
}

// lop : getThongTinNhomLopMonHoc
// mon : searchMonHocDangKyByMSMHfunction tool(NLMHId){
    

     function data(NLMHId){
        var dataString =  "msmh=" + NLMHId;
             
            
    
        jQuery.ajax({
            type: 'POST',
            url:   'searchMonHocDangKy.action',
            data: dataString,
            success: function(response) {
                 console.log(response)
                
            },
            error: function(){
                console.log("fail")
            }
        })
    }