SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `book_db`

-- Table structure for table `book_form`

CREATE TABLE `book_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` varchar(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `book_form` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(5, 'Alexis Pantaleon ', 'laurence10pantaleon@gmail.com', '112', 'wdefrgt', 'lajsak', '12', '2022-06-04', '2022-06-29'),
(7, 'Laurence Pantaleon', 'laurence10pantaleon@gmail.com', '11', 'wdefrgt', 'lajsak', '122', '2022-06-30', '2022-07-09');

-- Indexes for table `book_form`

ALTER TABLE `book_form`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT for table `book_form`

ALTER TABLE `book_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;