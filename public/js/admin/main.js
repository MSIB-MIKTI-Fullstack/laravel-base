// Alerts
var alert_del = document.querySelectorAll(".alert-hidden");
alert_del.forEach((x) =>
    x.addEventListener("click", function () {
        x.parentElement.classList.add("hidden");
    })
);

// Datatable
const dataTable = new simpleDatatables.DataTable("#datatable_1", {
    searchable: true,
    fixedHeight: false,
});
