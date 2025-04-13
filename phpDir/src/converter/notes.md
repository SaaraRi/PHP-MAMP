 <script>
        function toggleSections() {
            const conversionType = document.querySelector('input[name="conversion_type"]:checked').value;

            document.querySelector('.temperature').style.display = 'none';
            document.querySelector('.speed').style.display = 'none';
            document.querySelector('.mass').style.display = 'none';

            if (conversionType === 'temperature_radio') {
                document.querySelector('.temperature').style.display = 'block';
            } else if (conversionType === 'speed_radio') {
                document.querySelector('.speed').style.display = 'block';
            } else if (conversionType === 'mass_radio') {
                document.querySelector('.mass').style.display = 'block';
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            toggleSections();
            document.querySelectorAll('input[name="conversion_type"]').forEach(function(radio) {
                radio.addEventListener('change', toggleSections);
            });
        });
    </script>

            echo $number_input =  $number_input . " " . $unit1_temperature;
