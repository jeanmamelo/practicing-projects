const fs = require('fs');
const { join } = require('path');

// traverse file system
const traverse = (dir) => {

    const subfolders = fs.statSync(dir).isDirectory() && fs.readdirSync(dir);

    if (subfolders) {

        console.log('👟👟👟 traversing ', dir);

        subfolders.forEach(path => {
            const fullPath = join(dir, path);

            traverse(fullPath);
        });
    }
}

traverse(process.cwd());