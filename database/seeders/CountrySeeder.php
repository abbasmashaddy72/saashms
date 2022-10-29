<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input = [
            [1, 'Afghanistan', '93', 'Kabul', 'AFN', '؋', 'Asia', 33.00000000, 65.00000000],
            [2, 'Aland Islands', '+358-18', 'Mariehamn', 'EUR', '€', 'Europe', 60.11666700, 19.90000000],
            [3, 'Albania', '355', 'Tirana', 'ALL', 'Lek', 'Europe', 41.00000000, 20.00000000],
            [4, 'Algeria', '213', 'Algiers', 'DZD', 'دج', 'Africa', 28.00000000, 3.00000000],
            [5, 'American Samoa', '+1-684', 'Pago Pago', 'USD', '$', 'Oceania', -14.33333333, -170.00000000],
            [6, 'Andorra', '376', 'Andorra la Vella', 'EUR', '€', 'Europe', 42.50000000, 1.50000000],
            [7, 'Angola', '244', 'Luanda', 'AOA', 'Kz', 'Africa', -12.50000000, 18.50000000],
            [8, 'Anguilla', '+1-264', 'The Valley', 'XCD', '$', 'Americas', 18.25000000, -63.16666666],
            [9, 'Antarctica', '672', '', 'AAD', '$', 'Polar', -74.65000000, 4.48000000],
            [10, 'Antigua And Barbuda', '+1-268', "St. John's", 'XCD', '$', 'Americas', 17.05000000, -61.80000000],
            [11, 'Argentina', '54', 'Buenos Aires', 'ARS', '$', 'Americas', -34.00000000, -64.00000000],
            [12, 'Armenia', '374', 'Yerevan', 'AMD', '֏', 'Asia', 40.00000000, 45.00000000],
            [13, 'Aruba', '297', 'Oranjestad', 'AWG', 'ƒ', 'Americas', 12.50000000, -69.96666666],
            [14, 'Australia', '61', 'Canberra', 'AUD', '$', 'Oceania', -27.00000000, 133.00000000],
            [15, 'Austria', '43', 'Vienna', 'EUR', '€', 'Europe', 47.33333333, 13.33333333],
            [16, 'Azerbaijan', '994', 'Baku', 'AZN', 'm', 'Asia', 40.50000000, 47.50000000],
            [17, 'The Bahamas', '+1-242', 'Nassau', 'BSD', 'B$', 'Americas', 24.25000000, -76.00000000],
            [18, 'Bahrain', '973', 'Manama', 'BHD', '.د.ب', 'Asia', 26.00000000, 50.55000000],
            [19, 'Bangladesh', '880', 'Dhaka', 'BDT', '৳', 'Asia', 24.00000000, 90.00000000],
            [20, 'Barbados', '+1-246', 'Bridgetown', 'BBD', 'Bds$', 'Americas', 13.16666666, -59.53333333],
            [21, 'Belarus', '375', 'Minsk', 'BYN', 'Br', 'Europe', 53.00000000, 28.00000000],
            [22, 'Belgium', '32', 'Brussels', 'EUR', '€', 'Europe', 50.83333333, 4.00000000],
            [23, 'Belize', '501', 'Belmopan', 'BZD', '$', 'Americas', 17.25000000, -88.75000000],
            [24, 'Benin', '229', 'Porto-Novo', 'XOF', 'CFA', 'Africa', 9.50000000, 2.25000000],
            [25, 'Bermuda', '+1-441', 'Hamilton', 'BMD', '$', 'Americas', 32.33333333, -64.75000000],
            [26, 'Bhutan', '975', 'Thimphu', 'BTN', 'Nu.', 'Asia', 27.50000000, 90.50000000],
            [27, 'Bolivia', '591', 'Sucre', 'BOB', 'Bs.', 'Americas', -17.00000000, -65.00000000],
            [28, 'Bosnia and Herzegovina', '387', 'Sarajevo', 'BAM', 'KM', 'Europe', 44.00000000, 18.00000000],
            [29, 'Botswana', '267', 'Gaborone', 'BWP', 'P', 'Africa', -22.00000000, 24.00000000],
            [30, 'Bouvet Island', '0055', '', 'NOK', 'kr', '', -54.43333333, 3.40000000],
            [31, 'Brazil', '55', 'Brasilia', 'BRL', 'R$', 'Americas', -10.00000000, -55.00000000],
            [32, 'British Indian Ocean Territory', '246', 'Diego Garcia', 'USD', '$', 'Africa', -6.00000000, 71.50000000],
            [33, 'Brunei', '673', 'Bandar Seri Begawan', 'BND', 'B$', 'Asia', 4.50000000, 114.66666666],
            [34, 'Bulgaria', '359', 'Sofia', 'BGN', 'Лв.', 'Europe', 43.00000000, 25.00000000],
            [35, 'Burkina Faso', '226', 'Ouagadougou', 'XOF', 'CFA', 'Africa', 13.00000000, -2.00000000],
            [36, 'Burundi', '257', 'Bujumbura', 'BIF', 'FBu', 'Africa', -3.50000000, 30.00000000],
            [37, 'Cambodia', '855', 'Phnom Penh', 'KHR', 'KHR', 'Asia', 13.00000000, 105.00000000],
            [38, 'Cameroon', '237', 'Yaounde', 'XAF', 'FCFA', 'Africa', 6.00000000, 12.00000000],
            [39, 'Canada', '1', 'Ottawa', 'CAD', '$', 'Americas', 60.00000000, -95.00000000],
            [40, 'Cape Verde', '238', 'Praia', 'CVE', '$', 'Africa', 16.00000000, -24.00000000],
            [41, 'Cayman Islands', '+1-345', 'George Town', 'KYD', '$', 'Americas', 19.50000000, -80.50000000],
            [42, 'Central African Republic', '236', 'Bangui', 'XAF', 'FCFA', 'Africa', 7.00000000, 21.00000000],
            [43, 'Chad', '235', "N'Djamena", 'XAF', 'FCFA', 'Africa', 15.00000000, 19.00000000],
            [44, 'Chile', '56', 'Santiago', 'CLP', '$', 'Americas', -30.00000000, -71.00000000],
            [45, 'China', '86', 'Beijing', 'CNY', '¥', 'Asia', 35.00000000, 105.00000000],
            [46, 'Christmas Island', '61', 'Flying Fish Cove', 'AUD', '$', 'Oceania', -10.50000000, 105.66666666],
            [47, 'Cocos (Keeling) Islands', '61', 'West Island', 'AUD', '$', 'Oceania', -12.50000000, 96.83333333],
            [48, 'Colombia', '57', 'Bogotá', 'COP', '$', 'Americas', 4.00000000, -72.00000000],
            [49, 'Comoros', '269', 'Moroni', 'KMF', 'CF', 'Africa', -12.16666666, 44.25000000],
            [50, 'Congo', '242', 'Brazzaville', 'XAF', 'FC', 'Africa', -1.00000000, 15.00000000],
            [51, 'Democratic Republic of the Congo', '243', 'Kinshasa', 'CDF', 'FC', 'Africa', 0.00000000, 25.00000000],
            [52, 'Cook Islands', '682', 'Avarua', 'NZD', '$', 'Oceania', -21.23333333, -159.76666666],
            [53, 'Costa Rica', '506', 'San Jose', 'CRC', '₡', 'Americas', 10.00000000, -84.00000000],
            [54, "Cote D'Ivoire (Ivory Coast)", '225', 'Yamoussoukro', 'XOF', 'CFA', 'Africa', 8.00000000, -5.00000000],
            [55, 'Croatia', '385', 'Zagreb', 'HRK', 'kn', 'Europe', 45.16666666, 15.50000000],
            [56, 'Cuba', '53', 'Havana', 'CUP', '$', 'Americas', 21.50000000, -80.00000000],
            [57, 'Cyprus', '357', 'Nicosia', 'EUR', '€', 'Europe', 35.00000000, 33.00000000],
            [58, 'Czech Republic', '420', 'Prague', 'CZK', 'Kč', 'Europe', 49.75000000, 15.50000000],
            [59, 'Denmark', '45', 'Copenhagen', 'DKK', 'Kr.', 'Europe', 56.00000000, 10.00000000],
            [60, 'Djibouti', '253', 'Djibouti', 'DJF', 'Fdj', 'Africa', 11.50000000, 43.00000000],
            [61, 'Dominica', '+1-767', 'Roseau', 'XCD', '$', 'Americas', 15.41666666, -61.33333333],
            [62, 'Dominican Republic', '+1-809 and 1-829', 'Santo Domingo', 'DOP', '$', 'Americas', 19.00000000, -70.66666666],
            [63, 'East Timor', '670', 'Dili', 'USD', '$', 'Asia', -8.83333333, 125.91666666],
            [64, 'Ecuador', '593', 'Quito', 'USD', '$', 'Americas', -2.00000000, -77.50000000],
            [65, 'Egypt', '20', 'Cairo', 'EGP', 'ج.م', 'Africa', 27.00000000, 30.00000000],
            [66, 'El Salvador', '503', 'San Salvador', 'USD', '$', 'Americas', 13.83333333, -88.91666666],
            [67, 'Equatorial Guinea', '240', 'Malabo', 'XAF', 'FCFA', 'Africa', 2.00000000, 10.00000000],
            [68, 'Eritrea', '291', 'Asmara', 'ERN', 'Nfk', 'Africa', 15.00000000, 39.00000000],
            [69, 'Estonia', '372', 'Tallinn', 'EUR', '€', 'Europe', 59.00000000, 26.00000000],
            [70, 'Ethiopia', '251', 'Addis Ababa', 'ETB', 'Nkf', 'Africa', 8.00000000, 38.00000000],
            [71, 'Falkland Islands', '500', 'Stanley', 'FKP', '£', 'Americas', -51.75000000, -59.00000000],
            [72, 'Faroe Islands', '298', 'Torshavn', 'DKK', 'Kr.', 'Europe', 62.00000000, -7.00000000],
            [73, 'Fiji Islands', '679', 'Suva', 'FJD', 'FJ$', 'Oceania', -18.00000000, 175.00000000],
            [74, 'Finland', '358', 'Helsinki', 'EUR', '€', 'Europe', 64.00000000, 26.00000000],
            [75, 'France', '33', 'Paris', 'EUR', '€', 'Europe', 46.00000000, 2.00000000],
            [76, 'French Guiana', '594', 'Cayenne', 'EUR', '€', 'Americas', 4.00000000, -53.00000000],
            [77, 'French Polynesia', '689', 'Papeete', 'XPF', '₣', 'Oceania', -15.00000000, -140.00000000],
            [78, 'French Southern Territories', '262', 'Port-aux-Francais', 'EUR', '€', 'Africa', -49.25000000, 69.16700000],
            [79, 'Gabon', '241', 'Libreville', 'XAF', 'FCFA', 'Africa', -1.00000000, 11.75000000],
            [80, 'Gambia The', '220', 'Banjul', 'GMD', 'D', 'Africa', 13.46666666, -16.56666666],
            [81, 'Georgia', '995', 'Tbilisi', 'GEL', 'ლ', 'Asia', 42.00000000, 43.50000000],
            [82, 'Germany', '49', 'Berlin', 'EUR', '€', 'Europe', 51.00000000, 9.00000000],
            [83, 'Ghana', '233', 'Accra', 'GHS', 'GH₵', 'Africa', 8.00000000, -2.00000000],
            [84, 'Gibraltar', '350', 'Gibraltar', 'GIP', '£', 'Europe', 36.13333333, -5.35000000],
            [85, 'Greece', '30', 'Athens', 'EUR', '€', 'Europe', 39.00000000, 22.00000000],
            [86, 'Greenland', '299', 'Nuuk', 'DKK', 'Kr.', 'Americas', 72.00000000, -40.00000000],
            [87, 'Grenada', '+1-473', "St. George's", 'XCD', '$', 'Americas', 12.11666666, -61.66666666],
            [88, 'Guadeloupe', '590', 'Basse-Terre', 'EUR', '€', 'Americas', 16.25000000, -61.58333300],
            [89, 'Guam', '+1-671', 'Hagatna', 'USD', '$', 'Oceania', 13.46666666, 144.78333333],
            [90, 'Guatemala', '502', 'Guatemala City', 'GTQ', 'Q', 'Americas', 15.50000000, -90.25000000],
            [91, 'Guernsey and Alderney', '+44-1481', 'St Peter Port', 'GBP', '£', 'Europe', 49.46666666, -2.58333333],
            [92, 'Guinea', '224', 'Conakry', 'GNF', 'FG', 'Africa', 11.00000000, -10.00000000],
            [93, 'Guinea-Bissau', '245', 'Bissau', 'XOF', 'CFA', 'Africa', 12.00000000, -15.00000000],
            [94, 'Guyana', '592', 'Georgetown', 'GYD', '$', 'Americas', 5.00000000, -59.00000000],
            [95, 'Haiti', '509', 'Port-au-Prince', 'HTG', 'G', 'Americas', 19.00000000, -72.41666666],
            [96, 'Heard Island and McDonald Islands', '672', '', 'AUD', '$', '', -53.10000000, 72.51666666],
            [97, 'Honduras', '504', 'Tegucigalpa', 'HNL', 'L', 'Americas', 15.00000000, -86.50000000],
            [98, 'Hong Kong S.A.R.', '852', 'Hong Kong', 'HKD', '$', 'Asia', 22.25000000, 114.16666666],
            [99, 'Hungary', '36', 'Budapest', 'HUF', 'Ft', 'Europe', 47.00000000, 20.00000000],
            [100, 'Iceland', '354', 'Reykjavik', 'ISK', 'kr', 'Europe', 65.00000000, -18.00000000],
            [101, 'India', '91', 'New Delhi', 'INR', '₹', 'Asia', 20.00000000, 77.00000000],
            [102, 'Indonesia', '62', 'Jakarta', 'IDR', 'Rp', 'Asia', -5.00000000, 120.00000000],
            [103, 'Iran', '98', 'Tehran', 'IRR', '﷼', 'Asia', 32.00000000, 53.00000000],
            [104, 'Iraq', '964', 'Baghdad', 'IQD', 'د.ع', 'Asia', 33.00000000, 44.00000000],
            [105, 'Ireland', '353', 'Dublin', 'EUR', '€', 'Europe', 53.00000000, -8.00000000],
            [106, 'Israel', '972', 'Jerusalem', 'ILS', '₪', 'Asia', 31.50000000, 34.75000000],
            [107, 'Italy', '39', 'Rome', 'EUR', '€', 'Europe', 42.83333333, 12.83333333],
            [108, 'Jamaica', '+1-876', 'Kingston', 'JMD', 'J$', 'Americas', 18.25000000, -77.50000000],
            [109, 'Japan', '81', 'Tokyo', 'JPY', '¥', 'Asia', 36.00000000, 138.00000000],
            [110, 'Jersey', '+44-1534', 'Saint Helier', 'GBP', '£', 'Europe', 49.25000000, -2.16666666],
            [111, 'Jordan', '962', 'Amman', 'JOD', 'ا.د', 'Asia', 31.00000000, 36.00000000],
            [112, 'Kazakhstan', '7', 'Astana', 'KZT', 'лв', 'Asia', 48.00000000, 68.00000000],
            [113, 'Kenya', '254', 'Nairobi', 'KES', 'KSh', 'Africa', 1.00000000, 38.00000000],
            [114, 'Kiribati', '686', 'Tarawa', 'AUD', '$', 'Oceania', 1.41666666, 173.00000000],
            [115, 'North Korea', '850', 'Pyongyang', 'KPW', '₩', 'Asia', 40.00000000, 127.00000000],
            [116, 'South Korea', '82', 'Seoul', 'KRW', '₩', 'Asia', 37.00000000, 127.50000000],
            [117, 'Kuwait', '965', 'Kuwait City', 'KWD', 'ك.د', 'Asia', 29.50000000, 45.75000000],
            [118, 'Kyrgyzstan', '996', 'Bishkek', 'KGS', 'лв', 'Asia', 41.00000000, 75.00000000],
            [119, 'Laos', '856', 'Vientiane', 'LAK', '₭', 'Asia', 18.00000000, 105.00000000],
            [120, 'Latvia', '371', 'Riga', 'EUR', '€', 'Europe', 57.00000000, 25.00000000],
            [121, 'Lebanon', '961', 'Beirut', 'LBP', '£', 'Asia', 33.83333333, 35.83333333],
            [122, 'Lesotho', '266', 'Maseru', 'LSL', 'L', 'Africa', -29.50000000, 28.50000000],
            [123, 'Liberia', '231', 'Monrovia', 'LRD', '$', 'Africa', 6.50000000, -9.50000000],
            [124, 'Libya', '218', 'Tripolis', 'LYD', 'د.ل', 'Africa', 25.00000000, 17.00000000],
            [125, 'Liechtenstein', '423', 'Vaduz', 'CHF', 'CHf', 'Europe', 47.26666666, 9.53333333],
            [126, 'Lithuania', '370', 'Vilnius', 'EUR', '€', 'Europe', 56.00000000, 24.00000000],
            [127, 'Luxembourg', '352', 'Luxembourg', 'EUR', '€', 'Europe', 49.75000000, 6.16666666],
            [128, 'Macau S.A.R.', '853', 'Macao', 'MOP', '$', 'Asia', 22.16666666, 113.55000000],
            [129, 'Macedonia', '389', 'Skopje', 'MKD', 'ден', 'Europe', 41.83333333, 22.00000000],
            [130, 'Madagascar', '261', 'Antananarivo', 'MGA', 'Ar', 'Africa', -20.00000000, 47.00000000],
            [131, 'Malawi', '265', 'Lilongwe', 'MWK', 'MK', 'Africa', -13.50000000, 34.00000000],
            [132, 'Malaysia', '60', 'Kuala Lumpur', 'MYR', 'RM', 'Asia', 2.50000000, 112.50000000],
            [133, 'Maldives', '960', 'Male', 'MVR', 'Rf', 'Asia', 3.25000000, 73.00000000],
            [134, 'Mali', '223', 'Bamako', 'XOF', 'CFA', 'Africa', 17.00000000, -4.00000000],
            [135, 'Malta', '356', 'Valletta', 'EUR', '€', 'Europe', 35.83333333, 14.58333333],
            [136, 'Man (Isle of)', '+44-1624', 'Douglas, Isle of Man', 'GBP', '£', 'Europe', 54.25000000, -4.50000000],
            [137, 'Marshall Islands', '692', 'Majuro', 'USD', '$', 'Oceania', 9.00000000, 168.00000000],
            [138, 'Martinique', '596', 'Fort-de-France', 'EUR', '€', 'Americas', 14.66666700, -61.00000000],
            [139, 'Mauritania', '222', 'Nouakchott', 'MRO', 'MRU', 'Africa', 20.00000000, -12.00000000],
            [140, 'Mauritius', '230', 'Port Louis', 'MUR', '₨', 'Africa', -20.28333333, 57.55000000],
            [141, 'Mayotte', '262', 'Mamoudzou', 'EUR', '€', 'Africa', -12.83333333, 45.16666666],
            [142, 'Mexico', '52', 'Ciudad de México', 'MXN', '$', 'Americas', 23.00000000, -102.00000000],
            [143, 'Micronesia', '691', 'Palikir', 'USD', '$', 'Oceania', 6.91666666, 158.25000000],
            [144, 'Moldova', '373', 'Chisinau', 'MDL', 'L', 'Europe', 47.00000000, 29.00000000],
            [145, 'Monaco', '377', 'Monaco', 'EUR', '€', 'Europe', 43.73333333, 7.40000000],
            [146, 'Mongolia', '976', 'Ulan Bator', 'MNT', '₮', 'Asia', 46.00000000, 105.00000000],
            [147, 'Montenegro', '382', 'Podgorica', 'EUR', '€', 'Europe', 42.50000000, 19.30000000],
            [148, 'Montserrat', '+1-664', 'Plymouth', 'XCD', '$', 'Americas', 16.75000000, -62.20000000],
            [149, 'Morocco', '212', 'Rabat', 'MAD', 'DH', 'Africa', 32.00000000, -5.00000000],
            [150, 'Mozambique', '258', 'Maputo', 'MZN', 'MT', 'Africa', -18.25000000, 35.00000000],
            [151, 'Myanmar', '95', 'Nay Pyi Taw', 'MMK', 'K', 'Asia', 22.00000000, 98.00000000],
            [152, 'Namibia', '264', 'Windhoek', 'NAD', '$', 'Africa', -22.00000000, 17.00000000],
            [153, 'Nauru', '674', 'Yaren', 'AUD', '$', 'Oceania', -0.53333333, 166.91666666],
            [154, 'Nepal', '977', 'Kathmandu', 'NPR', '₨', 'Asia', 28.00000000, 84.00000000],
            [155, 'Bonaire, Sint Eustatius and Saba', '599', 'Kralendijk', 'USD', '$', 'Americas', 12.15000000, -68.26666700],
            [156, 'Netherlands', '31', 'Amsterdam', 'EUR', '€', 'Europe', 52.50000000, 5.75000000],
            [157, 'New Caledonia', '687', 'Noumea', 'XPF', '₣', 'Oceania', -21.50000000, 165.50000000],
            [158, 'New Zealand', '64', 'Wellington', 'NZD', '$', 'Oceania', -41.00000000, 174.00000000],
            [159, 'Nicaragua', '505', 'Managua', 'NIO', 'C$', 'Americas', 13.00000000, -85.00000000],
            [160, 'Niger', '227', 'Niamey', 'XOF', 'CFA', 'Africa', 16.00000000, 8.00000000],
            [161, 'Nigeria', '234', 'Abuja', 'NGN', '₦', 'Africa', 10.00000000, 8.00000000],
            [162, 'Niue', '683', 'Alofi', 'NZD', '$', 'Oceania', -19.03333333, -169.86666666],
            [163, 'Norfolk Island', '672', 'Kingston', 'AUD', '$', 'Oceania', -29.03333333, 167.95000000],
            [164, 'Northern Mariana Islands', '+1-670', 'Saipan', 'USD', '$', 'Oceania', 15.20000000, 145.75000000],
            [165, 'Norway', '47', 'Oslo', 'NOK', 'kr', 'Europe', 62.00000000, 10.00000000],
            [166, 'Oman', '968', 'Muscat', 'OMR', '.ع.ر', 'Asia', 21.00000000, 57.00000000],
            [167, 'Pakistan', '92', 'Islamabad', 'PKR', '₨', 'Asia', 30.00000000, 70.00000000],
            [168, 'Palau', '680', 'Melekeok', 'USD', '$', 'Oceania', 7.50000000, 134.50000000],
            [169, 'Palestinian Territory Occupied', '970', 'East Jerusalem', 'ILS', '₪', 'Asia', 31.90000000, 35.20000000],
            [170, 'Panama', '507', 'Panama City', 'PAB', 'B/.', 'Americas', 9.00000000, -80.00000000],
            [171, 'Papua new Guinea', '675', 'Port Moresby', 'PGK', 'K', 'Oceania', -6.00000000, 147.00000000],
            [172, 'Paraguay', '595', 'Asuncion', 'PYG', '₲', 'Americas', -23.00000000, -58.00000000],
            [173, 'Peru', '51', 'Lima', 'PEN', 'S/.', 'Americas', -10.00000000, -76.00000000],
            [174, 'Philippines', '63', 'Manila', 'PHP', '₱', 'Asia', 13.00000000, 122.00000000],
            [175, 'Pitcairn Island', '870', 'Adamstown', 'NZD', '$', 'Oceania', -25.06666666, -130.10000000],
            [176, 'Poland', '48', 'Warsaw', 'PLN', 'zł', 'Europe', 52.00000000, 20.00000000],
            [177, 'Portugal', '351', 'Lisbon', 'EUR', '€', 'Europe', 39.50000000, -8.00000000],
            [178, 'Puerto Rico', '+1-787 and 1-939', 'San Juan', 'USD', '$', 'Americas', 18.25000000, -66.50000000],
            [179, 'Qatar', '974', 'Doha', 'QAR', 'ق.ر', 'Asia', 25.50000000, 51.25000000],
            [180, 'Reunion', '262', 'Saint-Denis', 'EUR', '€', 'Africa', -21.15000000, 55.50000000],
            [181, 'Romania', '40', 'Bucharest', 'RON', 'lei', 'Europe', 46.00000000, 25.00000000],
            [182, 'Russia', '7', 'Moscow', 'RUB', '₽', 'Europe', 60.00000000, 100.00000000],
            [183, 'Rwanda', '250', 'Kigali', 'RWF', 'FRw', 'Africa', -2.00000000, 30.00000000],
            [184, 'Saint Helena', '290', 'Jamestown', 'SHP', '£', 'Africa', -15.95000000, -5.70000000],
            [185, 'Saint Kitts And Nevis', '+1-869', 'Basseterre', 'XCD', '$', 'Americas', 17.33333333, -62.75000000],
            [186, 'Saint Lucia', '+1-758', 'Castries', 'XCD', '$', 'Americas', 13.88333333, -60.96666666],
            [187, 'Saint Pierre and Miquelon', '508', 'Saint-Pierre', 'EUR', '€', 'Americas', 46.83333333, -56.33333333],
            [188, 'Saint Vincent And The Grenadines', '+1-784', 'Kingstown', 'XCD', '$', 'Americas', 13.25000000, -61.20000000],
            [189, 'Saint-Barthelemy', '590', 'Gustavia', 'EUR', '€', 'Americas', 18.50000000, -63.41666666],
            [190, 'Saint-Martin (French part)', '590', 'Marigot', 'EUR', '€', 'Americas', 18.08333333, -63.95000000],
            [191, 'Samoa', '685', 'Apia', 'WST', 'SAT', 'Oceania', -13.58333333, -172.33333333],
            [192, 'San Marino', '378', 'San Marino', 'EUR', '€', 'Europe', 43.76666666, 12.41666666],
            [193, 'Sao Tome and Principe', '239', 'Sao Tome', 'STD', 'Db', 'Africa', 1.00000000, 7.00000000],
            [194, 'Saudi Arabia', '966', 'Riyadh', 'SAR', '﷼', 'Asia', 25.00000000, 45.00000000],
            [195, 'Senegal', '221', 'Dakar', 'XOF', 'CFA', 'Africa', 14.00000000, -14.00000000],
            [196, 'Serbia', '381', 'Belgrade', 'RSD', 'din', 'Europe', 44.00000000, 21.00000000],
            [197, 'Seychelles', '248', 'Victoria', 'SCR', 'SRe', 'Africa', -4.58333333, 55.66666666],
            [198, 'Sierra Leone', '232', 'Freetown', 'SLL', 'Le', 'Africa', 8.50000000, -11.50000000],
            [199, 'Singapore', '65', 'Singapur', 'SGD', '$', 'Asia', 1.36666666, 103.80000000],
            [200, 'Slovakia', '421', 'Bratislava', 'EUR', '€', 'Europe', 48.66666666, 19.50000000],
            [201, 'Slovenia', '386', 'Ljubljana', 'EUR', '€', 'Europe', 46.11666666, 14.81666666],
            [202, 'Solomon Islands', '677', 'Honiara', 'SBD', 'Si$', 'Oceania', -8.00000000, 159.00000000],
            [203, 'Somalia', '252', 'Mogadishu', 'SOS', 'Sh.so.', 'Africa', 10.00000000, 49.00000000],
            [204, 'South Africa', '27', 'Pretoria', 'ZAR', 'R', 'Africa', -29.00000000, 24.00000000],
            [205, 'South Georgia', '500', 'Grytviken', 'GBP', '£', 'Americas', -54.50000000, -37.00000000],
            [206, 'South Sudan', '211', 'Juba', 'SSP', '£', 'Africa', 7.00000000, 30.00000000],
            [207, 'Spain', '34', 'Madrid', 'EUR', '€', 'Europe', 40.00000000, -4.00000000],
            [208, 'Sri Lanka', '94', 'Colombo', 'LKR', 'Rs', 'Asia', 7.00000000, 81.00000000],
            [209, 'Sudan', '249', 'Khartoum', 'SDG', '.س.ج', 'Africa', 15.00000000, 30.00000000],
            [210, 'Suriname', '597', 'Paramaribo', 'SRD', '$', 'Americas', 4.00000000, -56.00000000],
            [211, 'Svalbard And Jan Mayen Islands', '47', 'Longyearbyen', 'NOK', 'kr', 'Europe', 78.00000000, 20.00000000],
            [212, 'Swaziland', '268', 'Mbabane', 'SZL', 'E', 'Africa', -26.50000000, 31.50000000],
            [213, 'Sweden', '46', 'Stockholm', 'SEK', 'kr', 'Europe', 62.00000000, 15.00000000],
            [214, 'Switzerland', '41', 'Bern', 'CHF', 'CHf', 'Europe', 47.00000000, 8.00000000],
            [215, 'Syria', '963', 'Damascus', 'SYP', 'LS', 'Asia', 35.00000000, 38.00000000],
            [216, 'Taiwan', '886', 'Taipei', 'TWD', '$', 'Asia', 23.50000000, 121.00000000],
            [217, 'Tajikistan', '992', 'Dushanbe', 'TJS', 'SM', 'Asia', 39.00000000, 71.00000000],
            [218, 'Tanzania', '255', 'Dodoma', 'TZS', 'TSh', 'Africa', -6.00000000, 35.00000000],
            [219, 'Thailand', '66', 'Bangkok', 'THB', '฿', 'Asia', 15.00000000, 100.00000000],
            [220, 'Togo', '228', 'Lome', 'XOF', 'CFA', 'Africa', 8.00000000, 1.16666666],
            [221, 'Tokelau', '690', '', 'NZD', '$', 'Oceania', -9.00000000, -172.00000000],
            [222, 'Tonga', '676', "Nuku'alofa", 'TOP', '$', 'Oceania', -20.00000000, -175.00000000],
            [223, 'Trinidad And Tobago', '+1-868', 'Port of Spain', 'TTD', '$', 'Americas', 11.00000000, -61.00000000],
            [224, 'Tunisia', '216', 'Tunis', 'TND', 'ت.د', 'Africa', 34.00000000, 9.00000000],
            [225, 'Turkey', '90', 'Ankara', 'TRY', '₺', 'Asia', 39.00000000, 35.00000000],
            [226, 'Turkmenistan', '993', 'Ashgabat', 'TMT', 'T', 'Asia', 40.00000000, 60.00000000],
            [227, 'Turks And Caicos Islands', '+1-649', 'Cockburn Town', 'USD', '$', 'Americas', 21.75000000, -71.58333333],
            [228, 'Tuvalu', '688', 'Funafuti', 'AUD', '$', 'Oceania', -8.00000000, 178.00000000],
            [229, 'Uganda', '256', 'Kampala', 'UGX', 'USh', 'Africa', 1.00000000, 32.00000000],
            [230, 'Ukraine', '380', 'Kiev', 'UAH', '₴', 'Europe', 49.00000000, 32.00000000],
            [231, 'United Arab Emirates', '971', 'Abu Dhabi', 'AED', 'إ.د', 'Asia', 24.00000000, 54.00000000],
            [232, 'United Kingdom', '44', 'London', 'GBP', '£', 'Europe', 54.00000000, -2.00000000],
            [233, 'United States', '1', 'Washington', 'USD', '$', 'Americas', 38.00000000, -97.00000000],
            [234, 'United States Minor Outlying Islands', '1', '', 'USD', '$', 'Americas', 0.00000000, 0.00000000],
            [235, 'Uruguay', '598', 'Montevideo', 'UYU', '$', 'Americas', -33.00000000, -56.00000000],
            [236, 'Uzbekistan', '998', 'Tashkent', 'UZS', 'лв', 'Asia', 41.00000000, 64.00000000],
            [237, 'Vanuatu', '678', 'Port Vila', 'VUV', 'VT', 'Oceania', -16.00000000, 167.00000000],
            [238, 'Vatican City State (Holy See)', '379', 'Vatican City', 'EUR', '€', 'Europe', 41.90000000, 12.45000000],
            [239, 'Venezuela', '58', 'Caracas', 'VEF', 'Bs', 'Americas', 8.00000000, -66.00000000],
            [240, 'Vietnam', '84', 'Hanoi', 'VND', '₫', 'Asia', 16.16666666, 107.83333333],
            [241, 'Virgin Islands (British)', '+1-284', 'Road Town', 'USD', '$', 'Americas', 18.43138300, -64.62305000],
            [242, 'Virgin Islands (US)', '+1-340', 'Charlotte Amalie', 'USD', '$', 'Americas', 18.34000000, -64.93000000],
            [243, 'Wallis And Futuna Islands', '681', 'Mata Utu', 'XPF', '₣', 'Oceania', -13.30000000, -176.20000000],
            [244, 'Western Sahara', '212', 'El-Aaiun', 'MAD', 'MAD', 'Africa', 24.50000000, -13.00000000],
            [245, 'Yemen', '967', 'Sanaa', 'YER', '﷼', 'Asia', 15.00000000, 48.00000000],
            [246, 'Zambia', '260', 'Lusaka', 'ZMW', 'ZK', 'Africa', -15.00000000, 30.00000000],
            [247, 'Zimbabwe', '263', 'Harare', 'ZWL', '$', 'Africa', -20.00000000, 30.00000000],
            [248, 'Kosovo', '383', 'Pristina', 'EUR', '€', 'Europe', 42.56129090, 20.34030350],
            [249, 'Curaçao', '599', 'Willemstad', 'ANG', 'ƒ', 'Americas', 12.11666700, -68.93333300],
            [250, 'Sint Maarten (Dutch part)', '1721', 'Philipsburg', 'ANG', 'ƒ', 'Americas', 18.03333300, -63.05000000],
        ];

        foreach ($input as $data) {
            Country::insert([
                'id' => $data[0],
                'name' => $data[1],
                'phone_code' => $data[2],
                'capital' => $data[3],
                'currency' => $data[4],
                'currency_symbol' => $data[5],
                'region' => $data[6],
                'latitude' => $data[7],
                'longitude' => $data[8],
            ]);
        }
    }
}