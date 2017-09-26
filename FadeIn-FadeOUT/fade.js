// Para añadir el efecto de desvanecimiento justo antes de descargar la página 
window.addEventListener("beforeunload", function () {
  document.body.classList.add("animate-out");
});

/* Sintaxis: element.addEventListener(event, function, useCapture);
 * The first parameter is the type of the event (like "click" or "mousedown"). 
 * The second parameter is the function we want to call when the event occurs.
 * The third parameter is a boolean value specifying whether to use event bubbling 
 * or event capturing. This parameter is optional.
 */ 