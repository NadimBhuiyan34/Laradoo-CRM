const btnGrp = document.getElementsByClassName('btn-group')[2].children

// buttons
const listBtn = btnGrp[0]
const gridBtn = btnGrp[1]
const calenderBtn = btnGrp[2]
const chartBtn = btnGrp[4]
// sections
const tableList = document.getElementById('data-table');
const grid = document.getElementById('data-grid');
const calender = document.getElementById('calender-event');
const chart = document.getElementById('chart');

// eventListener
listBtn.addEventListener('click', e=>{
    tableList.style.display='block'
    grid.style.display='none'
    calender.style.display = 'none'
    chart.style.display = 'none'
})

gridBtn.addEventListener('click', e=>{
    grid.style.display='grid'
    tableList.style.display='none'
    calender.style.display='none'
    chart.style.display='none'
})

// calenderBtn.addEventListener('click', e=>{
//     calender.style.display='flex'
//     tableList.style.display='none'
//     grid.style.display='none'
//     chart.style.display='none'
// })

// chartBtn.addEventListener('click', e=>{
//     chart.style.display = 'block'
//     calender.style.display='none'
//     tableList.style.display='none'
//     grid.style.display='none'
// })