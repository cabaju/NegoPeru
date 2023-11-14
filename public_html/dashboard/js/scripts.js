// SIDEBAR TOGGLE

var sidebarOpen = false;
var sidebar = document.getElementById('sidebar');

function openSidebar() {
  if (!sidebarOpen) {
    sidebar.classList.add('sidebar-responsive');
    sidebarOpen = true;
  }
}

function closeSidebar() {
  if (sidebarOpen) {
    sidebar.classList.remove('sidebar-responsive');
    sidebarOpen = false;
  }
}

// ---------- CHARTS ----------

// BAR CHART

var barChartOptions = {
  series: [
    {
      data: [200000, 50000, 150000, 35000, 33000],
      name: 'Products',
    },
  ],
  chart: {
    type: 'bar',
    background: 'transparent',
    height: 350,
    toolbar: {
      show: false,
    },
  },
  colors: ['#2962ff', '#d50000', '#2e7d32', '#ff6d00', '#583cb3'],
  plotOptions: {
    bar: {
      distributed: true,
      borderRadius: 4,
      horizontal: false,
      columnWidth: '40%',
    },
  },
  dataLabels: {
    enabled: false,
  },
  fill: {
    opacity: 1,
  },
  grid: {
    borderColor: '#55596e',
    yaxis: {
      lines: {
        show: true,
      },
    },
    xaxis: {
      lines: {
        show: true,
      },
    },
  },



  legend: {
    labels: {
      colors: '#f5f7ff',
    },
    show: true,
    position: 'top',
  },


  stroke: {
    colors: ['transparent'],
    show: true,
    width: 2,
  },


  tooltip: {
    shared: true,
    intersect: false,
    theme: 'dark',
  },




  xaxis: {
    categories: ['Rompe olla', 'Quinua', 'Azucar', 'Frejol', 'Lentejas'],
    title: {
      style: {
        color: '#f5f7ff',
      },
    },
    axisBorder: {
      show: true,
      color: '#55596e',
    },
    axisTicks: {
      show: true,
      color: '#55596e',
    },
    labels: {
      style: {
        colors: '#f5f7ff',
      },
    },
  },
  yaxis: {
    title: {
      text: 'TOTAL DE VENTAS-2022',
      style: {
        color: '#f5f7ff',
      },
    },
    axisBorder: {
      color: '#55596e',
      show: true,
    },
    axisTicks: {
      color: '#55596e',
      show: true,
    },
    labels: {
      style: {
        colors: '#f5f7ff',
      },
    },
  },
};

var barChart = new ApexCharts(
  document.querySelector('#bar-chart'),
  barChartOptions
);
barChart.render();







// AREA CHART --------------------------------------
var areaChartOptions = {
  series: [
    {
      name: 'Rompe Olla',
      data: [10000, 12000, 15000, 17000, 11000, 24000, 26000],
    },
    {
      name: 'Quinua',
      data: [1000, 3000, 6000, 4000, 4000, 7000, 8500],
    },
    {
      name: 'Azucar',
      data: [11000, 11000, 10000, 8000, 10000, 14000, 15500],
    },
  ],
  chart: {
    type: 'area',
    background: 'transparent',
    height: 350,
    stacked: false,
    toolbar: {
      show: false,
    },
  },
  colors: ['#00ab57', '#d50000', 'peru'],
  labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul'],
  dataLabels: {
    enabled: false,
  },
  fill: {
    gradient: {
      opacityFrom: 0.4,
      opacityTo: 0.1,
      shadeIntensity: 1,
      stops: [0, 100],
      type: 'vertical',
    },
    type: 'gradient',
  },
  grid: {
    borderColor: '#55596e',
    yaxis: {
      lines: {
        show: true,
      },
    },

    xaxis: {
      categories: ['Rompe olla', 'Quinua', 'Azucar', 'Frejol', 'Lentejas'],
      title: {
        style: {
          color: '#f5f7ff',
        },
      },
      axisBorder: {
        show: true,
        color: '#55596e',
      },
      axisTicks: {
        show: true,
        color: '#55596e',
      },
      labels: {
        style: {
          colors: '#f5f7ff',
        },
      },
    },



  },
  legend: {
    labels: {
      colors: '#f5f7ff',
    },
    show: true,
    position: 'top',
  },

  tooltip: {
    shared: true,
    intersect: false,
    theme: 'dark',
  },

  markers: {
    size: 6,
    strokeColors: '#1b2635',
    strokeWidth: 3,
  },
  stroke: {
    curve: 'smooth',
  },
  xaxis: {
    axisBorder: {
      color: '#55596e',
      show: true,
    },
    axisTicks: {
      color: '#55596e',
      show: true,
    },
    labels: {
      offsetY: 5,
      style: {
        colors: '#f5f7ff',
      },
    },
  },
  yaxis: [
    {
      title: {
        text: 'VENTAS',
        style: {
          color: '#f5f7ff',
              },
      },
      labels: {
        style: {
          colors: ['#f5f7ff'],
        },
      },
    },
    {
      opposite: true,
      title: {
        
        style: {
          color: 'white',
        },
      },
      labels: {
        style: {
          colors: ['white'],
        },
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
    theme: 'dark',
  },

  
};

var areaChart = new ApexCharts(
  document.querySelector('#area-chart'),
  areaChartOptions
);
areaChart.render();




// COLUMN CHART------------------------------

var columnChartOptions = {
  color: '#f5f7ff',
  series: [{
  name: 'Año 2020',
  data: [90, 92, 93, 95, 80, 100, 130, 70, 60]
}, {
  name: 'Año 2021',
  data: [76, 80, 101, 98, 70, 120, 150, 82, 70]
}, {
  name: 'Año 2022',
  data: [83, 87, 80, 70, 72, 124, 120, 70, 76]
}],
  chart: {
  type: 'bar',
  height: 350
},
legend: {
  labels: {
    colors: 'red',
  },
  show: true,
  position: 'top',
},
plotOptions: {
  bar: {
    horizontal: false,
    columnWidth: '75%',
    endingShape: 'rounded'
  },
},
dataLabels: {
  enabled: false
},
stroke: {
  show: true,
  width: 2,
  colors: ['']
},
xaxis: {
  categories: ['Ene', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
  title: {
    style: {
      color: '#f5f7ff',
    },
     },
  },


yaxis: {
  title: {
    text: 'PERIODO 2020 AL 2022',
    style: {
      color: '#f5f7ff',
          },
  
  }
},



fill: {
  opacity: 1
},
tooltip: {
  y: {
    formatter: function (val) {
      return "S/. " + val + " MIL"
    }
  }
}
};



var columnChart = new ApexCharts(
  document.querySelector('#column-chart'),
  columnChartOptions
);
columnChart.render();




// DONUT CHART------------------------------


var donutChartOptions = {
  series: [44, 55, 41, 17, 10],
  chart: {
  width: 380,
  type: 'donut',
  dropShadow: {
    enabled: true,
    color: '#111',
    top: -1,
    left: 3,
    blur: 3,
    opacity: 0.2
  }
},
stroke: {
  width: 0,
},
plotOptions: {
  pie: {
    donut: {
      labels: {
        show: true,
        total: {
          showAlways: true,
          show: true
        }
      }
    }
  }
},
labels: ["Muy Satisfecho", "Satisfecho", "Poco Satisfecho", "Nada satisfecho", "No sabe No opina"],
dataLabels: {
  dropShadow: {
    color:'white',
    blur: 3,
    opacity: 0.9
  }
},
fill: {
type: 'pattern',
  opacity: 1.3,
  pattern: {
    enabled: true,
    style: ['verticalLines', 'squares', 'horizontalLines', 'circles','slantedLines'],
  },
},
states: {
  hover: {
    filter: 'none'
  }
},
theme: {
  palette: 'palette2'
},


  title: {
    text: 'TOTAL DE ENCUESTAS',
    style: {
      color: '#f5f7ff',
    },

},
responsive: [{
  breakpoint: 480,
  options: {
    chart: {
      width: 300
    },
    legend: {
      position: 'bottom'
    }
  }
}]
};

var donutChart = new ApexCharts(
  document.querySelector('#donut-chart'),
  donutChartOptions
);
donutChart.render();
