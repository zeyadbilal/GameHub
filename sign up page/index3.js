const inputs = document.querySelectorAll( ".contactInput");

inputs.forEach(ipt => {
  ipt.addEventListener("focus", () => {
    ipt.parentNode.classList.add("foucs") // عشان اضيف كلاس اسمو فوكس لما اضغط علي اي انبوت
    ipt.parentNode.classList.add("notEmpty") //نفس ااكلام بس مع كلاس اسم مختتلف 
  });
})

inputs.forEach(ipt => {
    ipt.addEventListener("blur", () => {
      ipt.parentNode.classList.remove("foucs") //هنا لما اشيل ايدي من ع الزرار
      if(ipt.value == ""){ipt.parentNode.classList.remove("notEmpty")} // هنا لو الخانه فاضيه مفيهاش كلام
    });
  })

  

