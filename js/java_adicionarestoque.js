document.getElementById("increase").addEventListener("click", function() {
    var countInput = document.getElementById("count");
    countInput.value = parseInt(countInput.value) + 1;
  });

  document.getElementById("decrease").addEventListener("click", function() {
    var countInput = document.getElementById("count");
    var countValue = parseInt(countInput.value);
    if (countValue > 0) {
      countInput.value = countValue - 1;
    }
  });