USE adlister_db;
TRUNCATE ads;
INSERT INTO ads (name, category, brand, price, description, photodir, user_id)
VALUES  ("iPhone 8", "Hardware", "Apple", 699.99,"A smartphone manufactured by Apple", "", "1"),
    ("Microsoft Office", "Software", "Microsoft", 159.99, "A software solution for writing word documents", "", "1"),
    ("Docker Enterprise", "Software", "Docker", 99.99, "A service for compartmentalizing software you build", "", "1"),
    ("Payments", "Software", "Stripe", 19.99, "A service for web developers to easily integrate online payments", "", "1"),
    ("Falcon 9", "Rockets", "SpaceX", 60000000.00,"A rocket to carry humans to the planet Mars", "", "1"),
    ("Compression", "Software","Pied Piper", 199.99,"A fast software compression service by the best business in the valley", "", "1"),
    ("Nucleas", "Software", "Hooli", 174.99,"A crappy Pied Piper clone", "", "1");
