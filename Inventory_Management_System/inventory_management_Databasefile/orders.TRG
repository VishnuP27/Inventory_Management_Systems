TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER `Decrease_Stock` AFTER UPDATE ON `orders` FOR EACH ROW UPDATE Supply SET Stock = Stock - (SELECT Item_quantity FROM Orders O,Supply S WHERE O.Item_Id = S.Item_id AND O.Order_status = "ACK" )WHERE Supply.Item_id IN (SELECT O.Item_id FROM Orders O,Supply S WHERE O.Item_Id = S.Item_id AND O.Order_status = "ACK" )'
sql_modes=1098907648
definers='root@localhost'
client_cs_names='utf8mb4'
connection_cl_names='utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci'
created=164396852899
