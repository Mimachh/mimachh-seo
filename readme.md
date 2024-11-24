# Installation

- Migrations : publish and migrate the seo table

`php artisan vendor:publish`
`php artisan migrate`

# Configuration

### Seo Model Fields

Every model that needs seo fields must have the trait `HasSeo`.

```php
use Mimachh\Seo\Traits\HasSeo;
use HasSeo;
```

This trait will provide 3 things :

- The relation to the model :

```php
    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
```

- The updated/created function (coming with his own validator)

```php
  public function updateSeo(array $data)
    {
        $this->seo()->updateOrCreate([], $data);
    }

        public static function bootHasSeo()
    {
        static::saved(function ($model) {
            if (request()->has('seo_title') || request()->has('seo_description')) {
                $data = [
                    'seo_title' => request('seo_title'),
                    'seo_description' => request('seo_description'),
                ];
                self::validateSeoData($data);
                $model->updateSeo($data);
            }
        });
    }
```

#### Saving the data

All you need to do is add 2 fields `seo_title` and `seo_description` in every form that create or update your model. Then you can retrieve this field as classical relations `$article->load('seo');`.

# WIP

This section is wip.

You can use the package to add schema.org elements.

If nothing works :
You probably will need to add the service provider to you app/bootstrap
`Mimachh\Seo\SeoServiceProvider::class`

### In blade files :

If you're using blade you can add the script like that.

```php
    <script type="application/ld+json">
        {!! SchemaOrg::person()
            ->name('John Doe')
            ->url('https://example.com')
            ->sameAs(['https://facebook.com/johndoe', 'https://twitter.com/johndoe'])
            ->toJsonLd()
        !!}
    </script>
```

Then the schema :

```php
    <div itemscope itemtype="https://schema.org/Person">
        {!! SchemaOrg::person()
            ->name('John Doe')
            ->toHtmlElement('span', 'name', 'John Doe')
        !!}
        {!! SchemaOrg::person()
            ->url('https://example.com')
            ->toHtmlElement('a', 'url', 'https://example.com', ['class' => 'my-custom-class'])
        !!}
        {!! SchemaOrg::person()
            ->sameAs(['https://facebook.com/johndoe', 'https://twitter.com/johndoe'])
            ->toHtmlElement('span', 'sameAs', 'https://facebook.com/johndoe')
        !!}
        {!! SchemaOrg::person()
            ->sameAs(['https://facebook.com/johndoe', 'https://twitter.com/johndoe'])
            ->toHtmlElement('span', 'sameAs', 'https://twitter.com/johndoe')
        !!}
        {!! SchemaOrg::person()
            ->url('https://example.com')
            ->toHtmlElement('Link', 'url', 'https://example.com')
        !!}
    </div>
```

### Inertia/React

To use it in inertia/react (or vue) you will need to generate the schema in your controller :

```php
        $schema = (new SchemaType())
            ->setAttribute('name', $article->title)
            ->setAttribute('author', $article->author->name)
            ->setAttribute('datePublished', $article->created_at->toIso8601String());

        return Inertia::render('Article/Show', [
            'article' => $article,
            'schema' => $schema->toJsonLd(),  // Schéma JSON-LD
        ]);
```

Then add it to the Head Component

```tsx
<Head>
  <script
    type="application/ld+json"
    dangerouslySetInnerHTML={{ __html: schema }}
  />
</Head>
```

V2

```php
        $schema = Seo::person()
        ->name($user->name)
        ->url($user->website)
        ->sameAs($user->socialLinks)
        ->toJsonLd();

        return Inertia::render('Profile', [
            'user' => $user,
            'schema' => $schema, // Passer les données JSON-LD
        ]);
```

```tsx

        <Head>
            {/* Inclure le script JSON-LD dans le <head> */}
            <script type="application/ld+json">
                {JSON.stringify(schema)}
            </script>
        </Head>

        <div itemscope itemtype="https://schema.org/Person">
            <span itemprop="name">{user.name}</span>
            <a itemprop="url" href={user.website}>{user.website}</a>

            {/* Liens sociaux */}
            {user.socialLinks.map((link, index) => (
                <span key={index} itemprop="sameAs">{link}</span>
            ))}
        </div>
```

Using Inertia you have access to the `SeoForm` component, you can publish it and using it in your inertia form. You can customize it, by default it use shadcn ui + custom form layout.