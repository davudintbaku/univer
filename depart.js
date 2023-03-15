function deyish(){

    let x = document.getElementById('teacher').value;
    document.getElementById('teacher').value = x;
    
    document.getElementById('depart_teacher').value=x
    
    
    }

        


function add(){

const less = document.createElement('input');
const less_id = document.createAttribute('id');
const less_name = document.createAttribute('name');
const less_type = document.createAttribute('type');
const less_placeholder = document.createAttribute('placeholder');

less.setAttributeNode(less_id);
less.setAttributeNode(less_name);
less.setAttributeNode(less_type);
less.setAttributeNode(less_placeholder);

less_id.value = "add_lesson";
less_name.value = "form_data[]";
less_type.value = "text";
less_placeholder.value = "fenn elave et";

document.getElementById('form').appendChild(less);











}

