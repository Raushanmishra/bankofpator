SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'manish Bera', 'manishbera@gmail.com', 400000),
(2, 'bharat Singh', 'bhartsingh@gmail.com', 30000),
(3, 'piyush Kumar', 'piyushkumar@gmail.com', 50000),
(4, 'rohit Singh ', 'rohitsingh@gmail.com', 57000),
(5, 'shivani Kumari', 'shivanikri@gmail.com', 42000),
(6, 'rambabu Roy', 'rambaburoy@gmail.com', 240000),
(7, 'ankit Raj', 'ankitraj@gmail.com', 83000),
(8, 'anand Singh', 'anandsns@gmail.com', 80000),
(9, 'sonu Sharma', 'sonuraj@gmail.com', 370000),
(10, 'sanjay Das', 'sanjaydass@gmail.com', 750000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;


