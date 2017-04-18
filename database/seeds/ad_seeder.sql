USE adlister_db;
TRUNCATE ads;
INSERT INTO ads (name, category, brand, price, description, photodir)
VALUES  ("iPhone 8", "Hardware", "Apple", 699.99,"A smartphone manufactured by Apple", ""),
    ("Microsoft Office", "Software", "Microsoft", 159.99, "A software solution for writing word documents", ""),
    ("Docker Enterprise", "Software", "Docker", 99.99, "A service for compartmentalizing software you build", ""),
    ("Payments", "Software", "Stripe", 19.99, "A service for web developers to easily integrate online payments", ""),
    ("Falcon 9", "Rockets", "SpaceX", 600000000.00,"A rocket to carry humans to the planet Mars", ""),
    ("Compression", "Software","Pied Piper", 199.99,"A fast software compression service by the best business in the valley", ""),
    ("Nucleas", "Software", "Hooli", 174.99,"A crappy Pied Piper clone", "");
