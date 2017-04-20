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
    ("Yo", "Software", "Or Arbel", 0.99, "An app to send people the word Yo", "", "1"),
    ("EndFrame", "Software", "EndFrame Corporation", 135.00, "Pied Pipers tech, stolen and rebraned", "", "1"),
    ("Aviato Aggregation", "Software", "AVIATO", 29.99, "An airline booking aggregator", "", "1"),
    ("Photo Sharing", "Software", "Flutterbeam", 0.99, "A photo sharing platform", "", "1"),
    ("Gooly", "Software", "GoolyBib", 119.99, "Integrated multi platform functionality", "", "1"),
    ("Venture Capital", "Investment", "Raviga", 49.99, "Series A and seed function venture capital", "", "1"),
    ("Venture Capital", "Investment", "Founders Fund", 49.99, "A fund that invests primarily in science and technology companies", "", "1"),
    ("Venture Capital", "Investment", "Seqouia Capital", 49.99, "A firm mainly focusing on the technology industry.", "", "1"),
    ("Venture Capital", "Investment", "Accel Partners", 49.99, "Accel partners with unique breakthrough ideas", "", "1"),
    ("Venture Capital", "Investment", "Altos Ventures", 49.99, "Invests in founder led bootstrapped companies", "", "1"),
    ("Venture Capital", "Investment", "Draper Fisher Jurvetson", 49.99, "Invests in early round tech startups with large potential", "", "1"),
    ("Venture Capital", "Investment", "Andreessen Horowitz", 49.99, "A Silicon Valley-based venture capital firm with $2.7 billion under management. They invest from seed to growth.", "", "1"),
    ("Venture Capital", "Investment", "Floodgate", 49.99, "A venture capital fund that specializes in marketing and product management", "", "1");
