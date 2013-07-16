$(function(){
/* Morris Charts */
  new Morris.Bar({
    element: 'miniglancechart1',
    data: [
      { year: '5/12', value: 32 },
      { year: '5/19', value: 45 },
      { year: '5/26', value: 48 },
      { year: '6/3', value: 71 },
      { year: '6/3', value: 71 },
      { year: '6/3', value: 81 },
      { year: '6/3', value: 71 },
      { year: '6/3', value: 41 },
      { year: '6/3', value: 51 },
      { year: '6/3', value: 51 },
      { year: '6/3', value: 91 },
      { year: '6/10', value: 92 }
    ],xkey: 'year',ykeys: ['value'],
    labels: ['Value'],
    barColors:['#36abff'],
    grid: false,
    axes: false,
    disableLegend: true,
    hideHover: true,
  });
  new Morris.Bar({
    element: 'miniglancechart2',
    data: [
      { year: '5/12', value: 32 },
      { year: '5/19', value: 45 },
      { year: '5/26', value: 48 },
      { year: '6/3', value: 71 },
      { year: '6/3', value: 71 },
      { year: '6/3', value: 81 },
      { year: '6/3', value: 71 },
      { year: '6/3', value: 41 },
      { year: '6/3', value: 51 },
      { year: '6/3', value: 51 },
      { year: '6/3', value: 91 },
      { year: '6/10', value: 92 }
    ],xkey: 'year',ykeys: ['value'],
    labels: ['Value'],
    barColors:['#36abff'],
    grid: false,
    axes: false,
    disableLegend: true,
    hideHover: true,
  });
    new Morris.Bar({
    element: 'miniglancechart3',
    data: [
      { year: '5/12', value: 32 },
      { year: '5/19', value: 45 },
      { year: '5/26', value: 48 },
      { year: '6/3', value: 71 },
      { year: '6/3', value: 71 },
      { year: '6/3', value: 81 },
      { year: '6/3', value: 71 },
      { year: '6/3', value: 41 },
      { year: '6/3', value: 51 },
      { year: '6/3', value: 51 },
      { year: '6/3', value: 91 },
      { year: '6/10', value: 92 }
    ],xkey: 'year',ykeys: ['value'],
    labels: ['Value'],
    barColors:['#36abff'],
    grid: false,
    axes: false,
    disableLegend: true,
    hideHover: true,
  });
});