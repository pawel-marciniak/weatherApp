<script>
    import { Line, mixins } from 'vue-chartjs';
    import zoom from 'chartjs-plugin-zoom';
    const { reactiveProp } = mixins

    export default {
        name: 'PressureChart',

        extends: Line,

        mixins: [reactiveProp],

        props: ['chartData'],

        data() {
            return {
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Time'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'Pressure'
                            },
                            ticks: {
                                callback: function(value, index, values) {
                                    return value + ' hPa';
                                }
                            }
                        }]
                    },
                    tooltips: {
                        callbacks: {
                            label: function(tooltipItem, data) {
                                return tooltipItem.value + ' hPa';
                            }
                        }
                    },
                    plugins: {
                        zoom: {
                            // Container for pan options
                            pan: {
                                // Boolean to enable panning
                                enabled: true,
                                mode: 'xy',
                                speed: 10,
                            },

                            // Container for zoom options
                            zoom: {
                                // Boolean to enable zooming
                                enabled: true,
                                speed: 0.05,
                            }
                        }
                    }
                }
            }
        },

        mounted () {
            this.addPlugin(zoom);

            this.renderChart(this.chartData, this.options)
        }
    }
</script>
