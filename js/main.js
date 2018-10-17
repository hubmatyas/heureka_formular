let today = new Date().toISOString().substr(0, 10);
document.querySelector("#today").value = today;

var output = {};
jQuery(form).serializeArray().map(function(item) {
    if ( output[item.name] ) {
        if ( typeof(output[item.name]) === "string" ) {
            output[item.name] = [output[item.name]];
        }
        output[item.name].push(item.value);
    } else {
        output[item.name] = item.value;
    }
});

function download(content, fileName, contentType) {
    var a = document.createElement("a");
    var file = new Blob([content], {type: contentType});
    a.href = URL.createObjectURL(file);
    a.download = fileName;
    a.click();
}
download(output, 'output.json', 'application/json');
