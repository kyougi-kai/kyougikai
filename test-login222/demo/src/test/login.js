function checkname() {
    const name = document.getElementById("name");

    if(name.value && name.value.length) {
        button.style.pointerEvents = "auto";
        document.getElementById('button').style.backgroundColor = '#006eff';
    } else {
      button.style.pointerEvents = "none";
      document.getElementById('button').style.backgroundColor = 'rgb(179, 224, 255)';
    }
  }
