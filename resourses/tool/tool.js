let list = $('tr')
var data = []
list.each((index,el)=>{
     
     if(index%2==1){
        let item = {
        }
       let fields =  $(el).children()
       item['id'] = $(el).attr('id').slice(6,11)
       item['stt'] = $(fields[0]).text()
       item['Mã MH  '] = $(fields[2]).text()
       item['Tên MH'] = '"'+$(fields[3]).text()+'"'
       item['Số TC'] =$(fields[4]).text()
       data.push(item)
     }
})

console.log(ConvertToCSV(data))






function ConvertToCSV(objArray) {
    var array = typeof objArray != 'object' ? JSON.parse(objArray) : objArray;
    var str = '';

    for (var i = 0; i < array.length; i++) {
        var line = '';
        for (var index in array[i]) {
            if (line != '') line += ','

            line += array[i][index];
        }

        str += line + '\r\n';
    }

    return str;
}