let btnGenerate = document.querySelector(".generate-image");
let btnDownload = document.querySelector(".download");

btnGenerate.addEventListener("click", () => {
  html2canvas(document.querySelector(".mega")).then((canvas) => {
    btnDownload.href = canvas.toDataURL("image/png");
    btnDownload.download = "mega";
    btnDownload.click();
  });
});
