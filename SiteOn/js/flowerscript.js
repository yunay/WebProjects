var urlAddress = "http://www.flowercoloredlife.com";
var pageName = "FlowersColoredLife.com :: Оцвети живота на хората!";
function addbookmark() 
{
if (window.external)
{
window.external.AddFavorite(urlAddress,pageName)
} 
else
{
alert("Функцията не се поддържа от браузърът.");
}
}
function entryCheck(form) {
if (isNaN(form.quantity.value)) {
alert("Изисква се цифра за количество!");
form.quantity.focus();
form.quantity.select();
return false;
}
if (parseFloat(form.quantity.value) < 1) {
alert("Не сте заявили количество!");
form.quantity.focus();
form.quantity.select();
return false;
}
if (parseFloat(form.quantity.value) > parseFloat(form.store.value)) {
alert("Не разполагаме със заявеното количество!");
form.quantity.focus();
form.quantity.select();
return false;
}
if (((form.zip.value) != 1000) && (!isNaN(form.zip.value))) {
var newQuantity = parseFloat(form.quantity.value);
var sumaz=3.000001;
sumaz += ((newQuantity-1) * 2);
sumaz = sumaz.toFixed(2);
document.getElementById("zipLabel").innerHTML = sumaz;
}
else { document.getElementById("zipLabel").innerHTML = "0.00"; }
var suma=0.000001;
suma += (parseFloat(form.price.value)) + ((parseFloat(form.quantity.value)-1) *
parseFloat(form.price.value) * ((100-parseFloat(form.discount.value))/100));
suma = suma.toFixed(2);
document.getElementById("quantityLabel").innerHTML = suma;
if (form.package.checked) {
var sumap=0.000001;
sumap += (parseInt(form.quantity.value) * parseFloat(form.price.value) * 5.000 /
100.000 );
sumap = sumap.toFixed(2);
document.getElementById("packageLabel").innerHTML = sumap;
}
else {
document.getElementById("packageLabel").innerHTML = "0.00";
}
if (((form.zip.value) != 1000) && (!isNaN(form.zip.value))) {
var sumaz=3.000001;
sumaz += ((parseFloat(form.quantity.value)-1) * 2);
sumaz = sumaz.toFixed(2);
document.getElementById("zipLabel").innerHTML = sumaz;
}
else {
document.getElementById("zipLabel").innerHTML = "0.00";
}
}
function recordCheck(form) {
//
// Други проверки за мейл, еднакви пароли и т.н. преди събмитиране
//
form.submit();
}
function accountCheck(form) {
var accountPattern = "^\\w+[@][a-zA-Z0-9\\-]+[.][a-zA-Z]+$";
if (!form.account.value.match(accountPattern)) {
document.getElementById("accountLabel").innerHTML = "Недопустимо!";
document.getElementById("myaccount").focus();
document.getElementById("myaccount").select();
return false;
}
else
{
document.getElementById("accountLabel").innerHTML = "OK!";
}
}