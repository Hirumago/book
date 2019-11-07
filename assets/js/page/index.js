$(function(){
    let gauges = $(".gauge");
    for (let i = 0; i < gauges.length; i++){
        let idGauge = gauges[i].id;
        let labelGauge = $(gauges[i]).attr('data-label');
        let valueGauge = $(gauges[i]).attr('data-value');
        let g = new JustGage({
            id: idGauge,
            value: valueGauge,
            min: 0,
            max: 10,
            label: labelGauge,
            donut: true,
            labelFontColor : "#3333FF"
        });
    }
});